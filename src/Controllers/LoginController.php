<?php

use App\Models\User;

if (isset($_POST['function'])) {
    $function = $_POST['function'];

    if (!function_exists($function)) {
        echo json_encode(['error' => 'Function not found', 'status' => 404]);
        http_response_code(404);
    }

    $params = $_POST;
    unset($params['function']); // Remove 'function' from the parameter array

    // Call the function with the values in $_POST as separate arguments
    call_user_func_array($function, $params);
} else {
    echo json_encode(['error' => 'Function was not passed', 'status' => 404]);
    http_response_code(404);
}

function userHandler(string $username, string $password)
{
    echo 'hi';

    $user = User::select(['username' => $username]);

    echo 'hi?';

    if (!$user) {
        echo json_encode(['error' => 'User not found', 'status' => 404]);
        http_response_code(404);
        return;
    }

    $HashedPassword = password_hash($password, PASSWORD_DEFAULT);
}