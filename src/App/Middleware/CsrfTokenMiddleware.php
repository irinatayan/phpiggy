<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\Contracts\MiddlewareInterface;
use Framework\TemplateEngine;

class CsrfTokenMiddleware implements MiddlewareInterface
{
    public function __construct(private TemplateEngine $view)
    {
    }

    public function process(callable $next)
    {
        $sessionToken = $_SESSION['token'] ?? bin2hex(random_bytes(32));
        $this->view->addGlobal('csrfToken', $sessionToken);
        $next();
    }
}