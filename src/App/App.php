<?php

declare(strict_types=1);

if (!isset($_SESSION)) {
    session_start();
}

error_reporting(E_ALL);

require __DIR__ . '/../../vendor/autoload.php';
$baseDir = __DIR__ . '/../../';
$dotenv = Dotenv\Dotenv::createImmutable($baseDir);
$envFile = $baseDir . '.env';
if (file_exists($envFile)) {
    $dotenv->load();
}
$dotenv->required(['DB_HOSTNAME', 'DB_DATABASE', 'DB_USERNAME', 'DB_PASSWORD']);

require __DIR__ . '/Config.php';
require __DIR__ . '/Services.php';
require __DIR__ . '/Repositories.php';
