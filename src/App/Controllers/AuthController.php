<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;
class AuthController
{

    public function __construct(private TemplateEngine $view)
    {

    }

    public function register(): void
    {
        echo $this->view->render("/register.php", ['title' => 'Register']);
    }
}