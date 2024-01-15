<?php

// Console configuration

use Takemo101\CmsTool\Console\StorageLinkCommand;

return [
    // Console command class name array
    'commands' => [
        // class-string<SymfonyCommand>

        StorageLinkCommand::class,
    ],
];
