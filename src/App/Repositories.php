<?php

declare(strict_types=1);

use App\Database\DbProvider;
use App\Repository\NoteRepository;
use App\Repository\TaskRepository;
use App\Repository\UserRepository;

$container['user_repository'] = static function (): UserRepository {
    return new UserRepository(DbProvider::get());
};

$container['task_repository'] = static function (): TaskRepository {
    return new TaskRepository(DbProvider::get());
};

$container['note_repository'] = static function (): NoteRepository {
    return new NoteRepository(DbProvider::get());
};
