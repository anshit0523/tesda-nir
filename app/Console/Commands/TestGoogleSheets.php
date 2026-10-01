<?php

namespace App\Console\Commands;

use App\Services\GoogleSheetsService;
use Illuminate\Console\Command;

class TestGoogleSheets extends Command
{
    protected $signature = 'google-sheets:test';

    protected $description = 'Test access to the TESDA NIR Google Spreadsheet';

    public function handle(GoogleSheetsService $googleSheets): int
    {
        $this->info('Testing Google Sheets connection...');
        $this->newLine();

        try {
            $spreadsheet = $googleSheets->getSpreadsheet();

            $this->info('✓ Google Sheets authentication successful.');
            $this->info('✓ Spreadsheet found.');
            $this->newLine();

            $this->line(
                'Spreadsheet title: ' .
                $spreadsheet->getProperties()->getTitle()
            );

            $this->line(
                'Spreadsheet ID: ' .
                $spreadsheet->getSpreadsheetId()
            );

            $this->newLine();

            $targetSheetId = 1434837740;
            $targetSheet = null;

            foreach ($spreadsheet->getSheets() as $sheet) {
                $properties = $sheet->getProperties();

                $this->line(
                    'Tab: ' .
                    $properties->getTitle() .
                    ' | GID: ' .
                    $properties->getSheetId()
                );

                if ($properties->getSheetId() === $targetSheetId) {
                    $targetSheet = $properties;
                }
            }

            $this->newLine();

            if ($targetSheet) {
                $this->info('✓ Target CSM tab found.');
                $this->line(
                    'Target tab: ' .
                    $targetSheet->getTitle()
                );
                $this->line(
                    'Target GID: ' .
                    $targetSheet->getSheetId()
                );
            } else {
                $this->warn(
                    '⚠ Spreadsheet found, but target tab GID ' .
                    $targetSheetId .
                    ' was not found.'
                );

                return self::FAILURE;
            }

            $this->newLine();
            $this->info('Google Sheets connection test PASSED.');

            return self::SUCCESS;

        } catch (\Throwable $e) {
            $this->newLine();
            $this->error('Google Sheets connection test FAILED.');
            $this->newLine();

            $this->error($e->getMessage());

            return self::FAILURE;
        }
    }
}