<?php

namespace App\Services;

use Google\Client;
use Google\Service\Drive;

class GoogleDriveService
{
    protected Drive $drive;

    public function __construct()
    {
        $jsonPath = base_path(
            env(
                'GOOGLE_SERVICE_ACCOUNT_JSON',
                'storage/app/google/service-account.json'
            )
        );

        if (!file_exists($jsonPath)) {
            throw new \RuntimeException(
                "Google service account JSON not found: {$jsonPath}"
            );
        }

        $client = new Client();

        $client->setAuthConfig($jsonPath);

        $client->setScopes([
            Drive::DRIVE,
        ]);

        $this->drive = new Drive($client);
    }

    /**
     * Find the CSM Excel file inside the configured Google Drive folder.
     */
    public function getCsmExcelFile()
    {
        $folderId = config('services.google_drive.csm_folder_id');
        $fileName = config('services.google_drive.csm_file_name');

        $response = $this->drive->files->listFiles([
            'q' => sprintf(
                "'%s' in parents and name = '%s' and trashed = false",
                $folderId,
                addslashes($fileName)
            ),

            'supportsAllDrives' => true,
            'includeItemsFromAllDrives' => true,

            'fields' => 'files(id,name,mimeType,parents,driveId)',
        ]);

        $files = $response->getFiles();

        if (empty($files)) {
            throw new \RuntimeException(
                "CSM Excel file '{$fileName}' was not found in the configured Google Drive folder."
            );
        }

        return $files[0];
    }

    /**
     * Download the current Excel file from Google Drive.
     */
    public function downloadFile(string $fileId): string
    {
        $response = $this->drive->files->get(
            $fileId,
            [
                'alt' => 'media',
                'supportsAllDrives' => true,
            ]
        );

        return $response->getBody()->getContents();
    }

    /**
     * Upload the modified Excel file back to the SAME Google Drive file.
     */
    public function updateFile(
        string $fileId,
        string $localFile
    ): void {
        if (!file_exists($localFile)) {
            throw new \RuntimeException(
                "Local Excel file not found: {$localFile}"
            );
        }

        $fileMetadata = new \Google\Service\Drive\DriveFile();

        $this->drive->files->update(
            $fileId,
            $fileMetadata,
            [
                'data' => file_get_contents($localFile),

                'mimeType' =>
                    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',

                'uploadType' => 'multipart',

                'supportsAllDrives' => true,
            ]
        );
    }
}

