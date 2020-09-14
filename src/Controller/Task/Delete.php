<?php

declare(strict_types=1);

namespace App\Controller\Task;

final class Delete extends Base
{
    public function __invoke(\App\Entity\Task $entity): void
    {
        $taskId = (int) $_GET['taskId'];
        $this->getServiceDeleteTask()->delete($taskId, $entity->getUserId());
    }
}
