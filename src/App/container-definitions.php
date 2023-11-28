<?php

declare(strict_types=1);

use Framework\{TemplateEngine, Database};
use App\Services\ValidatorService;
use App\Config\Paths;

return [
    TemplateEngine::class => fn() => new TemplateEngine(Paths::VIEW),
    ValidatorService::class => fn() => new ValidatorService(),
    Database::class => fn() => new Database(
        'mysql',
        [
            'host' => '127.0.0.1',
            'port' => 3307,
            'dbname' => 'phpiggy'
        ],
        'root',
        'electioneering'
    )
];