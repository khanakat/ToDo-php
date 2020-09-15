<?php

declare(strict_types=1);

namespace App\Controller\Task;

use App\Entity\Task;

final class GetAll extends Base
{
    public function __invoke(Task $entity): array
    {
        return $this->getServiceFindTask()->getAllByUser($entity->getId());
    }
}
