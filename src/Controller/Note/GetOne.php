<?php

declare(strict_types=1);

namespace App\Controller\Note;

final class GetOne extends Base
{
    public function __invoke(): \App\Entity\Note
    {
        return $this->getServiceFindNote()->getOne((int) $_GET['id']);
    }
}
