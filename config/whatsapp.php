
<?php
return [
    /*
     |--------------------------------------------------------------------------
     | Configuraciones basicas
     |--------------------------------------------------------------------------
     |
     |
     */
    'app_id' => env('FACEBOOK_APP_ID'),
    'app_secret' => env('FACEBOOK_APP_SECRET'),
    'app_token' => env('FACEBOOK_APP_TOKEN'),
    'api_version' => env('FACEBOOK_APP_VERSION', 'v16.0'),
    'webhook_verification_token' => env('FACEBOOK_WEBHOOK_VERIFICATION_TOKEN'),
];
