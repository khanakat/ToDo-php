<?php

declare(strict_types=1);

namespace App\Controller\Task;

use App\Entity\Task;

final class GetOne extends Base
{
    public function __invoke(Task $entity): Task
    {
        $taskId = (int) $_GET['id'];
        return $this->getServiceFindTask()->getOne($taskId, $entity->getUserId());
    }
}
