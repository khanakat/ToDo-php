<?php

declare(strict_types=1);

namespace App\Repository;

use App\Database\DbProvider;

abstract class BaseRepository
{
    /** @var \PDO */
    protected $database;

    public function __construct()
    {
        $this->database = DbProvider::get();
    }

    protected function getDb(): \PDO
    {
        return $this->database;
    }
}
