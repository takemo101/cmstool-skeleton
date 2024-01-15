<?php

define('APP_START_TIME', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

use Takemo101\Chubby\Application;
use Takemo101\Chubby\Http;

/** @var Application */
$app = require __DIR__ . '/../setting/bootstrap.php';

$http = new Http($app);

$http->run();
