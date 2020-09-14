<?php

declare(strict_types=1);

namespace App\Controller\User;

final class GetAll extends Base
{
    public function __invoke(): array
    {
        return $this->getServiceFindUser()->getAll();
    }
}
