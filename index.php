<?php
session_start();
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/':
        $redirect = '/ProjektWa/index.php';
        break;
    case '/login':
        $redirect = '/ProjektWa/login.html';
        break;
    case '/releases':
        $redirect = '/ProjektWa/releases.php';
        break;
    case '/store':
        $redirect = '/ProjektWa/store.php';
        break;
    case '/about':
        $redirect = '/ProjektWa/aboutus.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/ProjektWa/404.php';
        exit();
}

$_SESSION['site'] = $redirect;
require_once __DIR__ . '/ProjektWa/header.html';
require_once __DIR__ . $redirect ?? __DIR__ . '/ProjektWa/index.php';
require_once __DIR__ . '/ProjektWa/footer.html';
