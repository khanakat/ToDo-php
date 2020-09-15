<?php

declare(strict_types=1);

namespace App\Controller\User;

use App\Entity\User;

final class Update extends Base
{
    public function __invoke(User $entity): User
    {
        return $this->getServiceUpdateUser()->update($entity);
    }
}
