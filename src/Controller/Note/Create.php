<?php

declare(strict_types=1);

namespace App\Controller\Note;

final class Create extends Base
{
    public function __invoke(\App\Entity\Note $entity): \App\Entity\Note
    {
        return $this->getServiceCreateNote()->create($entity);
    }
}
