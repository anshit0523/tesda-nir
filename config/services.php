<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'groq' => [
    'api_key' => env('GROQ_API_KEY'),
    'model'   => env('GROQ_MODEL', 'llama-3.3-70b-versatile'),
],  

'google_drive' => [
    'service_account_json' => env(
        'GOOGLE_SERVICE_ACCOUNT_JSON',
        'storage/app/google/service-account.json'
    ),

    'csm_folder_id' => env('GOOGLE_DRIVE_CSM_FOLDER_ID'),

    'csm_file_name' => env(
        'GOOGLE_DRIVE_CSM_FILE_NAME',
        'cms.xlsx'
    ),
],

'google_sheets' => [
    'service_account_json' => env(
        'GOOGLE_SERVICE_ACCOUNT_JSON',
        'storage/app/google/service-account.json'
    ),

    'csm_spreadsheet_id' => env(
        'GOOGLE_SHEETS_CSM_SPREADSHEET_ID'
    ),
],

];
