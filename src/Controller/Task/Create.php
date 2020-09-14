<?php

declare(strict_types=1);

namespace App\Controller\Task;

final class Create extends Base
{
    public function __invoke(\App\Entity\Task $entity): \App\Entity\Task
    {
        return $this->getServiceCreateTask()->create($entity);
    }
}
