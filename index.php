<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require('view/main.php');
        break;
    case '' :
        require('view/main.php');
        break;
    case '/about' :
        require('view/about.php');
        break;
    default:
        http_response_code(404);
        require('/view/404.php');
        break;
}
