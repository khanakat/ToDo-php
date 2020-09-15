<?php

declare(strict_types=1);

namespace App\Database;

use PDO;

class DbProvider
{
    public static function get(): PDO
    {
        try {
            $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', __CONFIG__['db']['hostname'], __CONFIG__['db']['database']);
            $pdo = new PDO($dsn, __CONFIG__['db']['username'], __CONFIG__['db']['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        } catch (\PDOException $ex) {
            echo "DataBase Error: " . $ex->getMessage();
        } catch (\Exception $ex) {
            echo "General Error: " . $ex->getMessage();
        }
    }
}
