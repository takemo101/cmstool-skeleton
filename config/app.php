<?php

// Application basic settings

return [
    // Application base url
    'url' => env('APP_URL', 'http://localhost:8080'),

    // Application name
    'name' => env('APP_NAME', 'CmsTool'),

    // Application environment
    'env' => env('APP_ENV', 'local'),

    // Is debug mode enabled?
    'debug' => (bool) env('APP_DEBUG', true),

    // Timezone
    'timezone' => 'Asia/Tokyo',

    // Locale
    'locale' => 'ja',

    // Built-in server flag
    'built_in_server' => (bool) env('BUILT_IN_SERVER', false),
];
