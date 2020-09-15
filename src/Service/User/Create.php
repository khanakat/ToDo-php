<?php

declare(strict_types=1);

namespace App\Service\User;

use App\Exception\UserException;
use App\Entity\User;

final class Create extends Base
{
    public function create(User $entity): User
    {
        if (empty($entity->getName())) {
            throw new UserException('El campo "nombre" es obligatorio.', 400);
        }
        if (empty($entity->getEmail())) {
            throw new UserException('El campo "correo electrónico" es obligatorio.', 400);
        }
        if (empty($entity->getPassword())) {
            throw new UserException('El campo "contraseña" es obligatorio.', 400);
        }
        $entity->updateName(self::validateUserName($entity->getName()));
        $entity->updateEmail(self::validateEmail($entity->getEmail()));
        $entity->updatePassword(hash('sha512', $entity->getPassword()));
        $entity->updateCreatedAt(date('Y-m-d H:i:s'));
        $this->userRepository->checkUserByEmail($entity->getEmail());
        /** @var \App\Entity\User $user */
        $user = $this->userRepository->createUser($entity);

        return $user->getData();
    }
}
