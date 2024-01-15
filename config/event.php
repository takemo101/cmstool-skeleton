<?php

// Event configuration

use Takemo101\Chubby\Event\EventDispatcher;
use Takemo101\Chubby\Event\EventListenerProvider;
use Takemo101\CmsTool\Infra\Listener\AdminSessionContextSetupListener;
use Takemo101\CmsTool\Infra\Listener\CsrfGuardContextSetupListener;
use Takemo101\CmsTool\Infra\Listener\RequestParameterSetupListener;
use Takemo101\CmsTool\Infra\Listener\TwigExtensionSetupListener;

return [
    // EventDispatcherInterface implementation class name
    'dispatcher' => EventDispatcher::class,

    // ListenerProviderInterface implementation class name
    'provider' => EventListenerProvider::class,

    // Event listing class name array
    'listen' => [
        // class-string<object&callable>

        AdminSessionContextSetupListener::class,
        CsrfGuardContextSetupListener::class,
        RequestParameterSetupListener::class,
        TwigExtensionSetupListener::class,
    ]
];
