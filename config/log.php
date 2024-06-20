<?php

// Log basic configuration

use Monolog\Formatter\LineFormatter;
use Monolog\Level;
use Monolog\Processor\UidProcessor;
use Takemo101\Chubby\Log\Factory\ConsoleHandlerFactory;
use Takemo101\Chubby\Log\Factory\FileHandlerFactory;

return [
    // Log channel name
    'name' => null,

    // Log level
    'level' => Level::Debug,

    // Log bubble flag
    'bubble' => true,

    // File output log configuration
    'file' => [
        // Log directory path
        'path' => storage_path('logs'),

        // Log file name
        'filename' => 'error.log',

        // Log file permission
        'permission' => 0777,
    ],

    // Console output log configuration
    'console' => [
        // Log stream path
        'stream' => ConsoleHandlerFactory::DefaultStream,

        // Log stream permission
        'permission' => 0777,
    ],

    // Log date formater implement Monolog\Formatter\FormatterInterface
    'formatter' => LineFormatter::class,

    // Set an array of class names that implement ProcessorInterface
    'processors' => [
        UidProcessor::class,
    ],

    // Set an array of class names that implement LoggerHandlerFactory,
    'factories' => [
        FileHandlerFactory::class,
        ConsoleHandlerFactory::class,
    ],
];
