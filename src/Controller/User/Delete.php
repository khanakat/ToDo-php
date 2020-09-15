<?php

declare(strict_types=1);

namespace App\Controller\User;

use App\Entity\User;

final class Delete extends Base
{
    public function __invoke(User $entity): void
    {
        $this->getServiceDeleteUser()->delete($entity->getId());
    }
}
