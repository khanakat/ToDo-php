<?php

declare(strict_types=1);

namespace App\Database;

use PDO;

class DbProvider
{
    private static $_db;

    public static function get()
    {
        if (!self::$_db) {
            $db = __CONFIG__['db'];
            $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', $db['hostname'], $db['database']);
            $pdo = new PDO($dsn, $db['username'], $db['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            self::$_db = $pdo;
        }

        return self::$_db;
    }
}
