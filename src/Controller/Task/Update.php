<?php

declare(strict_types=1);

namespace App\Controller\Task;

final class Update extends Base
{
    public function __invoke(\App\Entity\Task $entity): \App\Entity\Task
    {
        $taskId = (int) $_GET['taskId'];
        return $this->getServiceUpdateTask()->update($entity, $taskId);
    }
}
