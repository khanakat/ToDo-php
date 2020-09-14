<?php

declare(strict_types=1);

namespace App\Service\Note;

final class Update extends Base
{
    public function update(\App\Entity\Note $entity, int $noteId): \App\Entity\Note
    {
        $note = $this->getNoteFromDb($noteId);
        if (!empty($entity->getName())) {
            $note->updateName(self::validateNoteName($entity->getName()));
        }
        if (!empty($entity->getDescription())) {
            $note->updateDescription($entity->getDescription());
        }
        $note->updateUpdatedAt(date('Y-m-d H:i:s'));
        /** @var \App\Entity\Note $notes */
        $notes = $this->noteRepository->updateNote($note);

        return $notes->getData();
    }
}
