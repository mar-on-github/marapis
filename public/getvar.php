<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '/../.env');
$dotenv->load();
// Only public .env is loaded, to make sure no one pulls our private variables.
if (isset($_GET['get'])) {
    header('Content-Type: text/plain; charset=utf-8');
    echo $_ENV[$_GET['get']];
}
