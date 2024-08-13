<?php
require_once '../controllers/AuthController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST' && $uri === '/register') {
    AuthController::register(file_get_contents('php://input'));
}

if ($method === 'POST' && $uri === '/login') {
    AuthController::login(file_get_contents('php://input'));
}

?>