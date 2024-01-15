<?php

// Slim framework related settings

use Takemo101\Chubby\Http\ErrorHandler\ErrorHandler;
use Takemo101\Chubby\Http\Factory\DefaultSlimFactory;
use Takemo101\CmsTool\Http\Support\CmsToolConfigurer;

return [

    // Base path
    'base_path' => env('BASE_PATH'),

    // Specify a class that implements Slimfactory, a factor class that generates Slim
    'factory' => DefaultSlimFactory::class,

    // Specify a class that implements Slimconfigurer to perform setting processing before executing Slim
    'configurer' => CmsToolConfigurer::class,

    // Error output settings
    'error' => [

        // Slim error handling specified classes that implement Error HandlerInterface
        'handler' => ErrorHandler::class,

        // ErrorMiddleware error display setting
        'setting' => [

            'display_error_details' => true,

            'log_errors' => true,

            'log_error_details' => true,
        ],
    ],
];
