<?php

require "../vendor/autoload.php";

use Jkuatapp\System\Authentication;

$email = $_POST['email'];
$password = $_POST['password'];

$loggedIn = Authentication::login($email, $password);

if ($loggedIn) {
    // redirect to user homepage
    // header("Location: /www/user/");
    header("Content-type: application/json");
    echo '{ "url": "/www/user" }';
} else {
    // Return an Error message
    http_response_code(401);
    echo "wrong email-password combination";
}

