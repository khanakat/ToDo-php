<?php

declare(strict_types=1);

namespace App\Service\User;

use App\Exception\UserException;
use App\Entity\User;

final class Update extends Base
{
    public function update(User $entity): User
    {
        if (empty($entity->getName()) && empty($entity->getEmail())) {
            throw new UserException('Enter the data to update the user.', 400);
        }
        if (!empty($entity->getName())) {
            $entity->updateName(self::validateUserName($entity->getName()));
        }
        if (!empty($entity->getEmail())) {
            $entity->updateEmail(self::validateEmail($entity->getEmail()));
        }
        if (!empty($entity->getPassword())) {
            $entity->updatePassword(hash('sha512', $entity->getPassword()));
        }
        $entity->updateUpdatedAt(date('Y-m-d H:i:s'));
        /** @var \App\Entity\User $users */
        $users = $this->userRepository->updateUser($entity);

        return $users->getData();
    }
}
