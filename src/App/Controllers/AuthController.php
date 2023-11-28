<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\{ValidatorService, UserService};

class AuthController
{

    public function __construct(
        private readonly TemplateEngine $view,
        private readonly ValidatorService $ValidatorService,
        private UserService $userService
    ) {
    }

    public function registerView(): void
    {
        echo $this->view->render("register.php", ['title' => 'Register']);
    }

    public function register(): void
    {
        $this->ValidatorService->validateRegister($_POST);
        $this->userService->isEmailTaken($_POST['email']);
        $this->userService->create($_POST);

        redirectTo('/');
    }

    public function loginView(): void
    {
        echo $this->view->render("login.php", ['title' => 'Login']);
    }

    public function login(): void
    {
        $this->ValidatorService->validateLogin($_POST);

        redirectTo('/');
    }
}