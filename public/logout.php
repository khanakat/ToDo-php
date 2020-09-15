<?php
require __DIR__ . '/../src/App/App.php';

if (!isset($_SESSION)) {
    session_start();
}

$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 60 * 60,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}
unset($_SESSION['user']);
session_destroy();
header('Location: /');
die();
