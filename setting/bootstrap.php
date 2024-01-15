<?php

use Takemo101\Chubby\ApplicationOption;
use Takemo101\CmsTool\CmsToolApplicationBuilder;

$app = CmsToolApplicationBuilder::build(
    ApplicationOption::from(
        basePath: getenv('APP_BASE_PATH') ?: dirname(__DIR__),
    ),
);

// Please add a Provider here to extend the functionality.
// $app->addProvider(new ExampleProvider());

return $app;
