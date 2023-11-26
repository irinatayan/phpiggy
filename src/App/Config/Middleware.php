<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Middleware\{SessionMiddleware, TemplateDataMiddleware, ValidationExceptionMiddleware, FlashMiddleware};

function registerMiddleware(App $app): void
{
    $app->addMiddleware(TemplateDataMiddleware::class );
    $app->addMiddleware(ValidationExceptionMiddleware::class );
    $app->addMiddleware(FlashMiddleware::class);
    $app->addMiddleware(SessionMiddleware::class );
}