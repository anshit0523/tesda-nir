<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Services\CsmExcelReader;
use App\Support\CsmRow;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CsmAdminController extends Controller
{
    private const FILTERS = ['q', 'client_type', 'service', 'sex', 'from', 'to'];
    private const PER_PAGE = 15;

    public function __construct(protected CsmExcelReader $reader) {}

    public function index(Request $request)
    {
        $filters = $request->only(self::FILTERS);
        $rows = $this->applyFilters($this->reader->all($request->boolean('refresh')), $filters)
            ->sortByDesc(fn (CsmRow $r) => [$r->date?->timestamp ?? 0, $r->id])->values();

        $page = LengthAwarePaginator::resolveCurrentPage();
        $responses = new LengthAwarePaginator(
            $rows->forPage($page, self::PER_PAGE)->values(),
            $rows->count(), self::PER_PAGE, $page,
            ['path' => $request->url(), 'query' => $request->except('page', 'refresh')]
        );

        // SQD stats on the filtered set (N/A excluded)
        $sums = array_fill(0, 9, ['sum' => 0, 'n' => 0, 'agree' => 0]);
        foreach ($rows as $r) {
            foreach ($r->sqd as $i => $answer) {
                $score = CsmRow::SCORES[$answer] ?? null;
                if ($score === null) continue;
                $sums[$i]['sum'] += $score;
                $sums[$i]['n']++;
                $sums[$i]['agree'] += $score >= 4 ? 1 : 0;
            }
        }

        $sqdStats = collect($sums)->map(fn ($s) => [
            'avg' => $s['n'] ? round($s['sum'] / $s['n'], 2) : null,
            'agree_pct' => $s['n'] ? round($s['agree'] / $s['n'] * 100) : null,
            'n' => $s['n'],
        ]);
        $totalN = collect($sums)->sum('n');

        $stats = [
            'total' => $rows->count(),
            'overall' => $totalN ? round(collect($sums)->sum('sum') / $totalN, 2) : null,
            'satisfied_pct' => $sqdStats[0]['agree_pct'],
            'sqd' => $sqdStats,
            'cc1' => $rows->countBy('cc1'),
            'services' => $rows->countBy('service_availed')->sortDesc(),
        ];

        return view('cms-admin.cms-index', compact('responses', 'stats', 'filters'));
    }

    public function show(int $id)
    {
        $response = $this->reader->find($id) ?? abort(404);

        return view('cms-admin.cms-show', compact('response'));
    }

    public function export(Request $request)
    {
        $rows = $this->applyFilters($this->reader->all(), $request->only(self::FILTERS))
            ->sortByDesc(fn (CsmRow $r) => $r->date?->timestamp ?? 0);

        return response()->streamDownload(function () use ($rows) {
            $out = fopen('php://output', 'w');
            fputcsv($out, array_merge(
                ['ID', 'Date', 'Client Type', 'Name', 'Sex', 'Age', 'Region', 'Service', 'CC1', 'CC2', 'CC3'],
                array_map(fn ($i) => "SQD$i", range(0, 8)),
                ['Suggestions', 'Email', 'Employee', 'Submitted At']
            ));
            foreach ($rows as $r) {
                fputcsv($out, array_merge(
                    [$r->id, $r->date?->format('Y-m-d'), $r->client_type, $r->name, $r->sex, $r->age,
                     $r->region, $r->service_availed, $r->cc1, $r->cc2, $r->cc3],
                    $r->sqd,
                    [$r->suggestions, $r->email, $r->employee_name, $r->created_at?->format('Y-m-d H:i:s')]
                ));
            }
            fclose($out);
        }, 'csm-responses-' . now()->format('Ymd-His') . '.csv', ['Content-Type' => 'text/csv']);
    }

    private function applyFilters(Collection $rows, array $f): Collection
    {
        return $rows
            ->when($f['q'] ?? null, function ($c, $q) {
                return $c->filter(fn (CsmRow $r) => mb_stripos(
                    implode(' ', [$r->name, $r->email, $r->employee_name, $r->suggestions]), $q
                ) !== false);
            })
            ->when($f['client_type'] ?? null, fn ($c, $v) => $c->where('client_type', $v))
            ->when($f['service'] ?? null, fn ($c, $v) => $c->where('service_availed', $v))
            ->when($f['sex'] ?? null, fn ($c, $v) => $c->where('sex', $v))
            ->when($f['from'] ?? null, fn ($c, $v) => $c->filter(fn (CsmRow $r) => $r->date && $r->date->toDateString() >= $v))
            ->when($f['to'] ?? null, fn ($c, $v) => $c->filter(fn (CsmRow $r) => $r->date && $r->date->toDateString() <= $v));
    }
}