<?php

declare(strict_types=1);

namespace App\Controller\Note;

final class Search extends Base
{
    public function __invoke(): array
    {
        return $this->getServiceFindNote()->search((string) $_GET['query']);
    }
}
