<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\Contracts\MiddlewareInterface;

class AllowOriginMiddleware implements MiddlewareInterface
{
    public function process(callable $next): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            header('Access-Control-Allow-Origin: ' . $_ENV['ALLOWED_ORIGIN']);
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
            header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
            http_response_code(200);
            exit();
        }
    }
}