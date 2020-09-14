<?php

declare(strict_types=1);

namespace App\Service\Task;

use App\Exception\Task;

final class Update extends Base
{
    public function update(\App\Entity\Task $entity, int $taskId): \App\Entity\Task
    {
        $task = $this->getTaskFromDb($taskId, (int) $entity->getUserId());
        if (empty($entity->getName()) && empty($entity->getStatus())) {
            throw new Task('Ingrese los datos para actualizar la tarea.', 400);
        }
        if (!empty($entity->getName())) {
            $task->updateName(self::validateTaskName($entity->getName()));
        }
        if (!empty($entity->getDescription())) {
            $task->updateDescription($entity->getDescription());
        }
        if (!empty($entity->getStatus())) {
            $task->updateStatus(self::validateTaskStatus($entity->getStatus()));
        }
        $task->updateUserId((int) $entity->getUserId());
        $task->updateUpdatedAt(date('Y-m-d H:i:s'));
        /** @var \App\Entity\Task $tasks */
        $tasks = $this->taskRepository->updateTask($task);

        return $tasks->getData();
    }
}
