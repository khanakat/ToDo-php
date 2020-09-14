<?php

declare(strict_types=1);

namespace App\Service\User;

final class Find extends Base
{
    public function getAll(): array
    {
        return $this->userRepository->getUsers();
    }

    public function getOne(int $userId): \App\Entity\User
    {
        return $this->userRepository->checkAndGetUser($userId);
    }

    public function search(string $usersName): array
    {
        return $this->userRepository->searchUsers($usersName);
    }
}
