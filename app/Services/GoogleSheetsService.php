<?php

namespace App\Services;

use Google\Client;
use Google\Service\Sheets;

class GoogleSheetsService
{
    protected Sheets $sheets;

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
            Sheets::SPREADSHEETS_READONLY,
        ]);

        $this->sheets = new Sheets($client);
    }

    public function getSpreadsheet()
    {
        return $this->sheets->spreadsheets->get(
            config('services.google_sheets.csm_spreadsheet_id'),
            [
                'fields' => 'spreadsheetId,properties.title,sheets.properties',
            ]
        );
    }
}