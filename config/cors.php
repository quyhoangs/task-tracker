<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => [
        'api/*',
        'sanctum/csrf-cookie',
        'login',
        'logout',
        // '/api/auth/google/callback' //đang gặp lỗi cors
        //Access to XMLHttpRequest at 'https://accounts.google.com/o/oauth2/auth?client_id=781322322722-mfa8e5pplc…le+email&response_type=code&state=xHTxbv74nRJHoixDaadm00kfyQCpyuV80YqmmCGK'
        // (redirected from 'http://localhost:8080/api/auth/google/redirect')
        // from origin 'http://localhost:8080' has been blocked by CORS policy:
        // Response to preflight request doesn't pass access control check: No 'Access-Control-Allow-Origin'
        // header is present on the requested resource.

    ],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],
    //'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization', 'Accept', 'Origin', 'Access-Control-Allow-Origin'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];
