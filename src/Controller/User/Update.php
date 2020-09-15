<?php

declare(strict_types=1);

namespace App\Controller\User;

final class Update extends Base
{
    public function __invoke(\App\Entity\User $entity): \App\Entity\User
    {
        return $this->getServiceUpdateUser()->update($entity);
    }
}
