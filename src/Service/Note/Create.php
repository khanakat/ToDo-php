<?php

declare(strict_types=1);

namespace App\Service\Note;

use App\Exception\Note;

final class Create extends Base
{
    public function create(\App\Entity\Note $entity): \App\Entity\Note
    {
        if (empty($entity->getName())) {
            throw new Note('Datos inválidos: el nombre es obligatorio.', 400);
        }
        $entity = new \App\Entity\Note();
        $entity->updateName(self::validateNoteName($entity->getName()));
        $desc = !empty($entity->getDescription()) ? $entity->getDescription() : null;
        $entity->updateDescription($desc);
        $entity->updateCreatedAt(date('Y-m-d H:i:s'));
        /** @var \App\Entity\Note $note */
        $note = $this->noteRepository->createNote($entity);

        return $note->getData();
    }
}
