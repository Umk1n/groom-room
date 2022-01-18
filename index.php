<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/public/index.php';
        break;
    case '' :
        require __DIR__ . '/public/index.php';
        break;
    case '/auto' :
        require __DIR__ . '/public/auto.php';
        break;
    case '/lk' :
        require __DIR__ . '/public/lk.php';
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . '/public/404.php';
        break;
}

