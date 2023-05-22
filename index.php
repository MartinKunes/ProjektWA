<?php
session_start();
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/':
        $redirect = '/ProjektWa/index.html';
        break;
    case '/login':
        $redirect = '/ProjektWa/login.html';
        break;
    case '/releases':
        $redirect = '/ProjektWa/releases.html';
        break;
    case '/store':
        $redirect = '/ProjektWa/store.html';
        break;
    case '/about':
        $redirect = '/ProjektWa/aboutus.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/ProjektWa/404.html';
        exit();
}

$_SESSION['site'] = $redirect;
require_once __DIR__ . '/ProjektWa/header.html';
require_once __DIR__ . $redirect ?? __DIR__ . '/ProjektWa/index.html';
require_once __DIR__ . '/ProjektWa/footer.html';
