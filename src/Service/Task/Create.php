<?php

declare(strict_types=1);

namespace App\Service\Task;

use App\Exception\Task;

final class Create extends Base
{
    public function create(\App\Entity\Task $entity): \App\Entity\Task
    {
        if (empty($entity->getName())) {
            throw new Task('El campo "nombre" es obligatorio.', 400);
        }
        $entity->updateName(self::validateTaskName($entity->getName()));
        $desc = !empty($entity->getDescription()) ? $entity->getDescription() : null;
        $entity->updateDescription($desc);
        $status = 0;
        if (!empty($entity->getStatus())) {
            $status = self::validateTaskStatus($entity->getStatus());
        }
        $entity->updateStatus($status);
        $entity->updateUserId($entity->getUserId());
        $entity->updateCreatedAt(date('Y-m-d H:i:s'));
        /** @var \App\Entity\Task $task */
        $task = $this->taskRepository->createTask($entity);

        return $task->getData();
    }
}
