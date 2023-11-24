<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\ValidatorService;
class AuthController
{

    public function __construct(private readonly TemplateEngine $view, private ValidatorService $ValidatorService)
    {
    }

    public function registerView(): void
    {
        echo $this->view->render("/register.php", ['title' => 'Register']);
    }

    public function register(): void
    {
       dd($_POST);
    }
}