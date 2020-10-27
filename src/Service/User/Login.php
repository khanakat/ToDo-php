<?php

declare(strict_types=1);

namespace App\Service\User;

use App\Exception\UserException;
use App\Entity\User;

final class Login extends Base
{
    public function login(object $entity): object
    {
        if (empty($entity->email)) {
            throw new UserException('El campo "correo electrónico" es obligatorio.', 400);
        }
        if (empty($entity->password)) {
            throw new UserException('El campo "contraseña" es obligatorio.', 400);
        }
        $password = hash('sha512', $entity->password);
        $user = $this->userRepository->loginUser($entity->email, $password);

        return $user->getData();
    }
}
