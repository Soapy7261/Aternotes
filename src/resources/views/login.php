<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/root.css">
    <link rel="stylesheet" href="../styles/login.css">
</head>

<?php
require_once __DIR__ . '/../../Controllers/LoginController.php';
include __DIR__ . '/../../../bootstrap.php';

if ($_POST['username'] && $_POST['password']) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    userHandler($username, $password);
}
?>

<body>
    <div class="container">
        <div class="login__container">
            <h1 class="login__header">Log in</h1>
            <img class="login__image" src="../images/logo_green.png" alt="logo" style="height: 5rem">
            <form class="login__form" action="" method="post">
                <div class="login__input__container">
                    <label for="username" class="login__label">Username</label>
                    <input type="text" id="username" name="username" class="login__input" required>
                </div>
                <div class="login__input__container">
                    <label for="password" class="login__label">Password</label>
                    <input type="password" id="password" name="password" class="login__input" required>
                </div>
                <button type="submit" class="login__button">Log in</button>
            </form>
        </div>
    </div>
</body>