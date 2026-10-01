<?php

namespace App\Support;

use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date as XlsDate;

/** One row of cms.xlsx. Column order matches CsmExcelService::appendResponse(). */
class CsmRow
{
    public const SCORES = [
        'Strongly Agree' => 5, 'Agree' => 4, 'Neither Agree nor Disagree' => 3,
        'Disagree' => 2, 'Strongly Disagree' => 1,
    ];

    public const SQD_LABELS = [
        0 => 'Satisfaction', 1 => 'Time', 2 => 'Requirements & steps', 3 => 'Ease of steps',
        4 => 'Information access', 5 => 'Fees', 6 => 'Fairness', 7 => 'Courtesy', 8 => 'Outcome',
    ];

    public const CC1 = [
        1 => 'Knows CC, saw it', 2 => 'Knows CC, did not see it',
        3 => 'Learned of CC when seen', 4 => 'Does not know CC',
    ];

    public ?float $average_score;

    public function __construct(
        public int $id,
        public ?Carbon $date,
        public ?string $client_type,
        public ?string $name,
        public ?string $sex,
        public ?int $age,
        public ?string $region,
        public ?string $service_availed,
        public ?int $cc1,
        public ?int $cc2,
        public ?int $cc3,
        public array $sqd,
        public ?string $suggestions,
        public ?string $email,
        public ?string $employee_name,
        public ?Carbon $created_at,
    ) {
        $scores = collect($sqd)->map(fn ($v) => self::SCORES[$v] ?? null)->filter();
        $this->average_score = $scores->isEmpty() ? null : round($scores->avg(), 2);
    }

    /** @param array<int, mixed> $r  zero-indexed cells A..X */
    public static function fromSheetRow(array $r): ?self
    {
        if (! is_numeric($r[0] ?? null)) {
            return null; // header, blank or malformed row
        }

        $str = fn ($v) => ($v === null || $v === '') ? null : trim((string) $v);
        $int = fn ($v) => is_numeric($v) ? (int) $v : null;

        return new self(
            (int) $r[0],
            self::date($r[1] ?? null),
            $str($r[2] ?? null), $str($r[3] ?? null), $str($r[4] ?? null),
            $int($r[5] ?? null),
            $str($r[6] ?? null), $str($r[7] ?? null),
            $int($r[8] ?? null), $int($r[9] ?? null), $int($r[10] ?? null),
            array_map(fn ($i) => $str($r[11 + $i] ?? null) ?? 'N/A', range(0, 8)),
            $str($r[20] ?? null), $str($r[21] ?? null), $str($r[22] ?? null),
            self::date($r[23] ?? null),
        );
    }

    private static function date(mixed $v): ?Carbon
    {
        if ($v === null || $v === '') return null;
        try {
            return is_numeric($v) ? Carbon::instance(XlsDate::excelToDateTimeObject($v)) : Carbon::parse($v);
        } catch (\Throwable) {
            return null;
        }
    }
}