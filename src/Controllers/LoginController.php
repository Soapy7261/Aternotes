<?php

use App\Models\User;

if (!function_exists('userHandler')) {
    function userHandler(string $username, string $password): string
    {
        $user = User::select(['username' => $username]);

        if (!$user) {
            return json_encode(['error' => 'User not found', 'status' => 404]);
        }

        $HashedPassword = password_hash($password, PASSWORD_DEFAULT);
    }
}