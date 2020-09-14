<?php

declare(strict_types=1);

namespace App\Controller\Note;

final class Delete extends Base
{
    public function __invoke(): void
    {
        $this->getServiceDeleteNote()->delete((int) $_GET['id']);
    }
}
