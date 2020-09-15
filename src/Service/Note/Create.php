<?php

declare(strict_types=1);

namespace App\Service\Note;

use App\Exception\NoteException;
use App\Entity\Note;

final class Create extends Base
{
    public function create(Note $entity): Note
    {
        if (empty($entity->getName())) {
            throw new NoteException('Datos inválidos: el nombre es obligatorio.', 400);
        }
        $entity->updateName(self::validateNoteName($entity->getName()));
        $desc = !empty($entity->getDescription()) ? $entity->getDescription() : null;
        $entity->updateDescription($desc);
        $entity->updateCreatedAt(date('Y-m-d H:i:s'));
        /** @var \App\Entity\Note $note */
        $note = $this->noteRepository->createNote($entity);

        return $note->getData();
    }
}
