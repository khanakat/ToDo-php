<?php

declare(strict_types=1);

namespace App\Database;

use PDO;

class DbProvider
{
    public static function get(): PDO
    {
        try {
            $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', CONFIG['db']['hostname'], CONFIG['db']['database']);
            $pdo = new PDO($dsn, CONFIG['db']['username'], CONFIG['db']['password']);
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
