<?php

declare(strict_types=1);

namespace App\Services;

use Framework\Database;

class TransactionService
{
    public function __construct(private Database $db)
    {
    }

    public function create(array $formData): void
    {
        $formattedDate = "{$formData['date']} 00:00:00";

        $this->db->query("insert into transactions(user_id, description, amount, date) 
                                values (:user_id, :description, :amount, :date)",
        [
            'user_id' => $_SESSION['user'],
            'description' => $formData['description'],
            'amount' => $formData['amount'],
            'date' => $formattedDate,
        ]);
    }

    public function getUserTransactions(): array
    {
        return $this->db->query(
            "SELECT *, DATE_FORMAT(date, '%Y-%m-%d') as formattedDate 
            FROM transactions WHERE user_id=:user_id",
            [
                'user_id' => $_SESSION['user']
            ]
        )->findAll();
    }
}