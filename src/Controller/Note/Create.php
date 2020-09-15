<?php

declare(strict_types=1);

namespace App\Controller\Note;

use App\Entity\Note;

final class Create extends Base
{
    public function __invoke(Note $entity): Note
    {
        return $this->getServiceCreateNote()->create($entity);
    }
}
