<?php

declare(strict_types=1);

namespace App\Service\User;

use App\Exception\UserException;
use App\Entity\User;

final class Login extends Base
{
    public function login(User $entity): User
    {
        if (empty($entity->getEmail())) {
            throw new UserException('El campo "correo electrónico" es obligatorio.', 400);
        }
        if (empty($entity->getPassword())) {
            throw new UserException('El campo "contraseña" es obligatorio.', 400);
        }
        $password = hash('sha512', $entity->getPassword());
        $user = $this->userRepository->loginUser($entity->getEmail(), $password);

        return $user->getData();
    }
}
