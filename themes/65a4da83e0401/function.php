<?php

use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpNotFoundException;
use Slim\Interfaces\RouteCollectorProxyInterface as Proxy;
use Takemo101\Chubby\Http\Renderer\HtmlRenderer;

use const Takemo101\CmsTool\HookTags\RegisterThemeRoute;

hook()->on(
    RegisterThemeRoute,
    function (
        Proxy $proxy,
    ) {
        $proxy->get(
            '/sample',
            fn (
                ServerRequestInterface $request,
            ) => throw new HttpNotFoundException($request),
        );
    },
);
