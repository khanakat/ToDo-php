<?php

declare(strict_types=1);

define('__CONFIG__', [
    'db' => [
        'hostname' => $_SERVER['DB_HOSTNAME'],
        'database' => $_SERVER['DB_DATABASE'],
        'username' => $_SERVER['DB_USERNAME'],
        'password' => $_SERVER['DB_PASSWORD']
    ],
    'app' => [
        'domain' => $_SERVER['APP_DOMAIN']
    ]
]);
