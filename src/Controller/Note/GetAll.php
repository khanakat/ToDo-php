<?php

declare(strict_types=1);

namespace App\Controller\Note;

final class GetAll extends Base
{
    public function __invoke(): array
    {

        return $this->getServiceFindNote()->getAll();
    }
}
