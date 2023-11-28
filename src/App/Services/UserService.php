<?php

declare(strict_types=1);

namespace App\Services;

use Framework\Database;
use Framework\Exceptions\ValidationException;

class UserService
{
    public function __construct(private Database $db)
    {
    }

    public function isEmailTaken(string $email)
    {
        $emailCount = $this->db->query(
            "SELECT COUNT(*) FROM users WHERE email=:email",
            ["email" => $email]
        )->count();

        if ($emailCount > 0) {
            throw new ValidationException([
                'email' => 'Email taken',
            ]);
        }
    }

    public function create(array $formData): void
    {

        $this->db->query(
              "insert into users (email, password, age, country, social_media_url)
              values (:email, :password, :age, :country, :social_media_url)",
              [
                  "email" => $formData['email'],
                  "password" => $formData['password'],
                  "age" => $formData['age'],
                  "country" => $formData['country'],
                  "social_media_url" => $formData['socialMediaURL'],
              ]
              );

    }
}