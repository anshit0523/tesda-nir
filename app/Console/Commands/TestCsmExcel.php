<?php

namespace App\Console\Commands;

use App\Services\GoogleDriveService;
use Illuminate\Console\Command;
use PhpOffice\PhpSpreadsheet\IOFactory;

class TestCsmExcel extends Command
{
    protected $signature = 'csm:excel-test';

    protected $description = 'Test access to the CSM Excel file on Google Drive';

    public function handle(GoogleDriveService $googleDrive): int
    {
        $this->info('Testing CSM Excel connection...');
        $this->newLine();

        $tempFile = storage_path('app/csm/cms-test.xlsx');

        try {
            /*
             * 1. Find cms.xlsx in Google Drive
             */
            $this->info('Searching for cms.xlsx...');

            $file = $googleDrive->getCsmExcelFile();

            $this->info('✓ cms.xlsx found.');
            $this->newLine();

            $this->line('File name: ' . $file->getName());
            $this->line('File ID: ' . $file->getId());
            $this->line('MIME type: ' . $file->getMimeType());

            /*
             * 2. Download Excel file
             */
            $this->newLine();
            $this->info('Downloading cms.xlsx...');

            if (!is_dir(dirname($tempFile))) {
                mkdir(dirname($tempFile), 0755, true);
            }

            $content = $googleDrive->downloadFile(
                $file->getId()
            );

            file_put_contents($tempFile, $content);

            $this->info('✓ Excel file downloaded.');

            /*
             * 3. Open Excel using PhpSpreadsheet
             */
            $this->newLine();
            $this->info('Opening Excel with PhpSpreadsheet...');

            $spreadsheet = IOFactory::load($tempFile);

            $this->info('✓ Excel file opened successfully.');

            /*
             * 4. Inspect worksheets
             */
            $this->newLine();
            $this->info('Worksheets found:');

            foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {
                $this->line(
                    '- ' .
                    $worksheet->getTitle() .
                    ' (' .
                    $worksheet->getHighestRow() .
                    ' rows, ' .
                    $worksheet->getHighestColumn() .
                    ' columns)'
                );
            }

            /*
             * 5. Display first row
             */
            $worksheet = $spreadsheet->getActiveSheet();

            $this->newLine();
            $this->info(
                'Active worksheet: ' .
                $worksheet->getTitle()
            );

            $highestColumn = $worksheet->getHighestColumn();

            $headers = $worksheet
                ->rangeToArray(
                    'A1:' . $highestColumn . '1',
                    null,
                    true,
                    true,
                    false
                );

            if (!empty($headers[0])) {
                $this->newLine();
                $this->info('Headers:');

                foreach ($headers[0] as $index => $header) {
                    if ($header !== null && $header !== '') {
                        $this->line(
                            ($index + 1) . '. ' . $header
                        );
                    }
                }
            }

            /*
             * 6. Clean up temporary file
             */
            $spreadsheet->disconnectWorksheets();
            unset($spreadsheet);

            if (file_exists($tempFile)) {
                unlink($tempFile);
            }

            $this->newLine();
            $this->info('✓ CSM Excel connection test PASSED.');

            return self::SUCCESS;

        } catch (\Throwable $e) {

            if (file_exists($tempFile)) {
                unlink($tempFile);
            }

            $this->newLine();
            $this->error('CSM Excel connection test FAILED.');
            $this->newLine();

            $this->error($e->getMessage());

            return self::FAILURE;
        }
    }
}