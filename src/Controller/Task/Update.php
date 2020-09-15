<?php

declare(strict_types=1);

namespace App\Controller\Task;

use App\Entity\Task;

final class Update extends Base
{
    public function __invoke(Task $entity): Task
    {
        $taskId = (int) $_GET['taskId'];
        return $this->getServiceUpdateTask()->update($entity, $taskId);
    }
}
