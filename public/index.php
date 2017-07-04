<?php

//
// enforce typed
//

declare(strict_types=1);

use App\AppContext;
use App\Components\Contents\ContentsRegistry;
use App\Components\Simple\SimpleRegistry;
use Simplon\Core\Core;
use Simplon\Core\Middleware\ExceptionMiddleware;
use Simplon\Core\Middleware\LocaleMiddleware;
use Simplon\Core\Middleware\RouteMiddleware;

require __DIR__ . '/../vendor/simplon/core/src/autoload.php';

//
// instantiate AppContext
//

$appContext = new AppContext();
$localeMiddleware = new LocaleMiddleware(['en', 'en-us']);

//
// components queue
//

$components = [
    new ContentsRegistry($appContext),
    new SimpleRegistry($appContext),
];

//
// middleware queue
//

$middleware = [
    (new ExceptionMiddleware())->setIsProduction(false),
    $localeMiddleware,
    new RouteMiddleware($components),
];

//
// run core with app data
//

(new Core())->withSession(60)->run($middleware);