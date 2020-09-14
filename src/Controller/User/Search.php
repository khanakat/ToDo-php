<?php

declare(strict_types=1);

namespace App\Controller\User;

final class Search extends Base
{
    public function __invoke(): array
    {
        return $this->getServiceFindUser()->search($_GET['query']);
    }
}
