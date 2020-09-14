<?php

declare(strict_types=1);

namespace App\Controller\Task;

final class Search extends Base
{
    public function __invoke(\App\Entity\Task $entity): array
    {
        $query = '';
        if (isset($_GET['query'])) {
            $query = $_GET['query'];
        }
        $status = (string) $_GET['status'];
        return $this->getServiceFindTask()->search($query, $entity->getUserId(), $status);
    }
}
