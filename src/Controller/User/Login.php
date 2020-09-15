<?php

declare(strict_types=1);

namespace App\Controller\User;

use App\Entity\User;

final class Login extends Base
{
    public function __invoke(User $entity): User
    {
        return $this->getServiceLoginUser()->login($entity);
    }
}
