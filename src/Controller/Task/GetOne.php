<?php

declare(strict_types=1);

namespace App\Controller\Task;

final class GetOne extends Base
{
    public function __invoke(\App\Entity\Task $entity): \App\Entity\Task
    {
        $taskId = (int) $_GET['id'];
        return $this->getServiceFindTask()->getOne($taskId, $entity->getUserId());
    }
}
