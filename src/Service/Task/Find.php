<?php

declare(strict_types=1);

namespace App\Service\Task;

final class Find extends Base
{
    public function getAllByUser(int $userId): array
    {
        return $this->taskRepository->getTasksByUserId($userId);
    }

    public function getAll(): array
    {
        return $this->taskRepository->getTasks();
    }

    public function getOne(int $taskId, int $userId): \App\Entity\Task
    {
        return $this->getTaskFromDb($taskId, $userId)->getData();
    }

    public function search(string $tasksName, int $userId, ?string $status): array
    {
        if ($status !== null) {
            $status = (int) $status;
        }

        return $this->taskRepository->searchTasks($tasksName, $userId, $status);
    }
}
