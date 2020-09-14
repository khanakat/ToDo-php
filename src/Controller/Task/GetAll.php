<?php

declare(strict_types=1);

namespace App\Controller\Task;

final class GetAll extends Base
{
    public function __invoke(\App\Entity\Task $entity): array
    {
        return $this->getServiceFindTask()->getAllByUser($entity->getId());
    }
}
