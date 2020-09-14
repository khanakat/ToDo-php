<?php

declare(strict_types=1);

namespace App\Controller\User;

final class Delete extends Base
{
    public function __invoke(\App\Entity\User $entity): void
    {
        $this->getServiceDeleteUser()->delete($entity->getId());
    }
}
