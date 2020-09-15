<?php

declare(strict_types=1);

namespace App\Controller\Note;

use App\Entity\Note;

final class GetOne extends Base
{
    public function __invoke(): Note
    {
        return $this->getServiceFindNote()->getOne((int) $_GET['id']);
    }
}
