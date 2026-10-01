<?php

namespace App\Console\Commands;

use App\Services\GoogleDriveService;
use Illuminate\Console\Command;

class TestGoogleDrive extends Command
{
    protected $signature = 'google-drive:test';

    protected $description = 'Test access to the TESDA NIR Google Drive folder and CSM spreadsheet';

    public function handle(GoogleDriveService $googleDrive): int
    {
        $this->info('Testing Google Drive connection...');
        $this->newLine();

        try {
            // Test folder
            $folder = $googleDrive->getFolder();

            $this->info('✓ Google Drive authentication successful.');
            $this->info('✓ Folder found.');
            $this->newLine();

            $this->line('Folder name: ' . $folder->getName());
            $this->line('Folder ID: ' . $folder->getId());
            $this->line('MIME type: ' . $folder->getMimeType());
            $this->line(
                'Shared Drive ID: ' .
                ($folder->getDriveId() ?? 'Not detected')
            );

            // Test spreadsheet
            $this->newLine();
            $this->info('Testing CSM spreadsheet...');
            $this->newLine();

            $spreadsheet = $googleDrive->getCsmSpreadsheet();

            $this->info('✓ Spreadsheet found.');
            $this->newLine();

            $this->line('Spreadsheet name: ' . $spreadsheet->getName());
            $this->line('Spreadsheet ID: ' . $spreadsheet->getId());
            $this->line('MIME type: ' . $spreadsheet->getMimeType());

            $this->newLine();

            if (
                $spreadsheet->getMimeType() ===
                'application/vnd.google-apps.spreadsheet'
            ) {
                $this->info('✓ File is a native Google Spreadsheet.');
            } else {
                $this->warn(
                    '⚠ File is NOT a native Google Spreadsheet.'
                );
            }

            $this->newLine();
            $this->info('Google Drive connection test PASSED.');

            return self::SUCCESS;

        } catch (\Throwable $e) {
            $this->newLine();
            $this->error('Google Drive connection test FAILED.');
            $this->newLine();

            $this->error($e->getMessage());

            return self::FAILURE;
        }
    }
}