<?php

declare(strict_types=1);

namespace App\Service\Note;

final class Find extends Base
{
    public function getAll(): array
    {
        return $this->noteRepository->getNotes();
    }

    public function getOne(int $noteId): \App\Entity\Note
    {
        return $this->getNoteFromDb($noteId)->getData();
    }

    public function search(string $notesName): array
    {
        return $this->noteRepository->searchNotes($notesName);
    }
}
