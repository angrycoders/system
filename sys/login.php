<?php

require __DIR__ . "/../vendor/autoload.php";


use Jkuatapp\System\Authentication;


session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$user = Authentication::login($email, $password);


if ($user) {
    $_SESSION['username'] = $user['username'];
    unset($_SESSION['login_error']);
    header("Location: /www/user/");
} else {
    http_response_code(401);
    $_SESSION['login_error'] = "wrong email-password combination";
    header("Location: /www/login/");
}

