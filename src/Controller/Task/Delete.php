<?php

declare(strict_types=1);

namespace App\Controller\Task;

use App\Entity\Task;

final class Delete extends Base
{
    public function __invoke(Task $entity): void
    {
        $taskId = (int) $_GET['taskId'];
        $this->getServiceDeleteTask()->delete($taskId, $entity->getUserId());
    }
}
