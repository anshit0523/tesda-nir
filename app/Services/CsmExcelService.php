<?php

namespace App\Services;

use Google\Service\Drive;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class CsmExcelService
{
    protected string $lockFile;

    protected string $tempDirectory;

    public function __construct(
        protected GoogleDriveService $googleDrive
    ) {
        $this->lockFile = storage_path('app/csm/cms.xlsx.lock');

        $this->tempDirectory = storage_path('app/csm');

        if (!is_dir($this->tempDirectory)) {
            mkdir($this->tempDirectory, 0755, true);
        }
    }

    /**
     * Append one CSM response to cms.xlsx on Google Drive.
     */
    public function appendResponse(array $data): void
    {
        $lockHandle = fopen($this->lockFile, 'c');

        if ($lockHandle === false) {
            throw new \RuntimeException(
                'Unable to create CSM Excel lock file.'
            );
        }

        try {
            if (!flock($lockHandle, LOCK_EX)) {
                throw new \RuntimeException(
                    'Unable to acquire CSM Excel lock.'
                );
            }

            /*
             * 1. Find cms.xlsx
             */
            $file = $this->googleDrive->getCsmExcelFile();

            $fileId = $file->getId();

            /*
             * 2. Download the current cms.xlsx
             */
            $excelContent = $this->googleDrive->downloadFile($fileId);

            $localFile = $this->tempDirectory . '/cms-working.xlsx';
            $tempFile = $this->tempDirectory . '/cms-temp-' . uniqid() . '.xlsx';

            file_put_contents($localFile, $excelContent);

            /*
             * 3. Open workbook
             */
            $spreadsheet = IOFactory::load($localFile);

            $worksheet = $spreadsheet->getActiveSheet();

            /*
             * 4. Determine next row
             */
            $nextRow = $worksheet->getHighestRow() + 1;

            /*
             * 5. Determine next ID
             */
            $nextId = $this->getNextId($worksheet);

            /*
             * 6. Prepare row
             */
            $row = [
                $nextId,
                $data['date'] ?? null,
                $data['client_type'] ?? null,
                $data['name'] ?? null,
                $data['sex'] ?? null,
                $data['age'] ?? null,
                $data['region'] ?? null,
                $data['service_availed'] ?? null,
                $data['cc1'] ?? null,
                $data['cc2'] ?? null,
                $data['cc3'] ?? null,

                $data['sqd'][0] ?? null,
                $data['sqd'][1] ?? null,
                $data['sqd'][2] ?? null,
                $data['sqd'][3] ?? null,
                $data['sqd'][4] ?? null,
                $data['sqd'][5] ?? null,
                $data['sqd'][6] ?? null,
                $data['sqd'][7] ?? null,
                $data['sqd'][8] ?? null,

                $data['suggestions'] ?? null,
                $data['email'] ?? null,
                $data['employee_name'] ?? null,
                now()->format('Y-m-d H:i:s'),
            ];

            /*
             * 7. Write row to worksheet
             */
            $worksheet->fromArray(
                $row,
                null,
                'A' . $nextRow
            );

            /*
             * 8. Save to temporary file
             */
            $writer = IOFactory::createWriter(
                $spreadsheet,
                'Xlsx'
            );

            $writer->save($tempFile);

            /*
             * 9. Clean up PhpSpreadsheet memory
             */
            $spreadsheet->disconnectWorksheets();

            unset($spreadsheet);

            /*
             * 10. Replace working file safely
             */
            if (file_exists($localFile)) {
                unlink($localFile);
            }

            rename($tempFile, $localFile);

            /*
             * 11. Upload/update SAME Google Drive file
             */
            $this->googleDrive->updateFile(
                $fileId,
                $localFile
            );

            /*
             * 12. Remove local working copy
             */
            if (file_exists($localFile)) {
                unlink($localFile);
            }

        } finally {

            /*
             * Always release the lock.
             */
            flock($lockHandle, LOCK_UN);
            fclose($lockHandle);

            /*
             * Clean up temporary files if something failed.
             */
            foreach (
                glob($this->tempDirectory . '/cms-temp-*.xlsx') ?: []
                as $file
            ) {
                if (is_file($file)) {
                    @unlink($file);
                }
            }
        }
    }

    /**
     * Determine the next numeric ID.
     */
    protected function getNextId($worksheet): int
    {
        $highestRow = $worksheet->getHighestRow();

        if ($highestRow <= 1) {
            return 1;
        }

        $lastId = $worksheet
            ->getCell('A' . $highestRow)
            ->getValue();

        if (is_numeric($lastId)) {
            return ((int) $lastId) + 1;
        }

        /*
         * Fallback: scan the ID column.
         */
        $maxId = 0;

        for ($row = 2; $row <= $highestRow; $row++) {
            $id = $worksheet
                ->getCell('A' . $row)
                ->getValue();

            if (is_numeric($id)) {
                $maxId = max($maxId, (int) $id);
            }
        }

        return $maxId + 1;
    }
}