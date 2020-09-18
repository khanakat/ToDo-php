<?php

declare(strict_types=1);

namespace App\Service\Task;

use App\Service\BaseService;
use App\Exception\TaskException;
use App\Repository\TaskRepository;
use App\Entity\Task;
use Respect\Validation\Validator as v;

abstract class Base extends BaseService
{
    /** @var TaskRepository */
    protected $taskRepository;

    public function __construct()
    {
        $this->taskRepository = new TaskRepository();
    }

    protected static function validateTaskName(string $name): string
    {
        if (!v::length(1, 100)->validate($name)) {
            throw new TaskException('Nombre de Tarea inválido.', 400);
        }

        return $name;
    }

    protected static function validateTaskStatus(int $status): int
    {
        if (!v::numeric()->between(0, 1)->validate($status)) {
            throw new TaskException('Estado de Tarea inválido', 400);
        }

        return $status;
    }

    protected function getTaskFromDb(int $taskId, int $userId): Task
    {
        return $this->taskRepository->checkAndGetTask($taskId, $userId);
    }
}
