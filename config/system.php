<?php

use GuzzleHttp\RequestOptions;
use Takemo101\CmsTool\Support\Webhook\CacheCleanWebhookHandler;

// CMSTOOL system unique configuration

return [
    // The path to the setting file.
    'setting' => base_path('setting.json'),

    // Route path of management screen and installation screen
    'route' => '/system',

    // Settings to send web hooks to the system
    'webhook' => [

        // Route path of webhook
        'route' => env('SYSTEM_WEBHOOK_ROUTE', '/webhook'),

        // Header name of webhook
        'header' => env('SYSTEM_WEBHOOK_HEADER', 'X-CMSTOOL-WEBHOOK-TOKEN'),

        // WebhookHandler implementation class name
        'handlers' => [
            CacheCleanWebhookHandler::class,
        ],
    ],

    // GuzzleHttp client options
    // referrer: https://docs.guzzlephp.org/en/stable/request-options.html
    'guzzle' => [

        RequestOptions::CRYPTO_METHOD => env('GUZZLE_TLS_OPTION', false)
            ? STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT
            : null,
        RequestOptions::TIMEOUT => 60, // default: 30
    ],
];
