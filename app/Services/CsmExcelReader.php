<?php

namespace App\Services;

use App\Support\CsmRow;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use PhpOffice\PhpSpreadsheet\IOFactory;

/**
 * Read-only access to cms.xlsx on Google Drive.
 * Downloads the file, parses it, and caches the rows briefly so the
 * dashboard doesn't hit Drive on every page view.
 */
class CsmExcelReader
{
    private const CACHE_KEY = 'csm.rows';
    private const TTL_SECONDS = 60;

    public function __construct(protected GoogleDriveService $drive) {}

    /** @return Collection<int, CsmRow> */
    public function all(bool $refresh = false): Collection
    {
        if ($refresh) {
            Cache::forget(self::CACHE_KEY);
        }

        $raw = Cache::remember(self::CACHE_KEY, self::TTL_SECONDS, fn () => $this->load());

        return collect($raw)->map(fn ($r) => CsmRow::fromSheetRow($r))->filter()->values();
    }

    public function find(int $id): ?CsmRow
    {
        return $this->all()->firstWhere('id', $id);
    }

    /** @return array<int, array<int, mixed>> */
    private function load(): array
    {
        $file = $this->drive->getCsmExcelFile();
        $content = $this->drive->downloadFile($file->getId());

        $path = tempnam(sys_get_temp_dir(), 'csm') . '.xlsx';
        file_put_contents($path, $content);

        try {
            $reader = IOFactory::createReader('Xlsx');
            $reader->setReadDataOnly(true);
            $sheet = $reader->load($path)->getActiveSheet();

            // raw values (no formatting), numeric-indexed columns
            return $sheet->toArray(null, false, false, false);
        } finally {
            @unlink($path);
        }
    }
}