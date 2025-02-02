<?php

declare(strict_types=1);

require __DIR__ . '/../../src/App/App.php';

try {
    $db = __CONFIG__['db'];
    $hostname = $db['hostname'];
    $database = $db['database'];
    $username = $db['username'];
    $password = $db['password'];

    $pdo = new PDO("mysql:host=${hostname}", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("DROP DATABASE IF EXISTS ${database}");
    echo '[OK] Database droped successfully' . PHP_EOL;

    $pdo->exec("CREATE DATABASE ${database}");
    echo '[OK] Database created successfully' . PHP_EOL;

    $pdo->exec("USE ${database}");
    echo '[OK] Database selected successfully' . PHP_EOL;

    $sql = file_get_contents(__DIR__ . '/../../database/database.sql');
    $pdo->exec($sql);
    echo '[OK] Records inserted successfully' . PHP_EOL;
} catch (PDOException $exception) {
    echo '[ERROR] ' . $exception->getMessage() . PHP_EOL;
}
