<?php

declare(strict_types=1);

namespace App\Controller\Task;

use App\Entity\Task;

final class Create extends Base
{
    public function __invoke(Task $entity): Task
    {
        return $this->getServiceCreateTask()->create($entity);
    }
}
