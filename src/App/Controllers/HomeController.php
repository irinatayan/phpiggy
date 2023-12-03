<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\TransactionService;

class HomeController
{

    public function __construct(private TemplateEngine $view, private TransactionService $transactionService)
    {

    }

    public function home(): void
    {

        $page = $_GET['p'] ?? 1;
        $page = (int) $page;
        $length = 3;
        $offset = ($page - 1) * $length;
        $transactions = $this->transactionService->getUserTransactions($length, $offset);
        $searchTerm = $_GET['s'] ?? null;

        echo $this->view->render("/index.php",
            [
                'title' => 'Home page',
                'transactions' => $transactions,
                'currentPage' => $page,
                'previousPageQuery' => http_build_query([
                    'p' => $page - 1,
                    's' => $searchTerm,
                ]),
            ]);
    }
}