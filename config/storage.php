<?php

// Storage configuration

return [
    // Settings to open the storage externally
    'public' => [

        // URL to open the storage externally
        'url' => '/storage',

        // Directory path to create symbolic links to public storage
        'link_path' => base_path('public/storage'),

        // Published storage directory path
        'storage_path' => storage_path('public'),
    ],
];
