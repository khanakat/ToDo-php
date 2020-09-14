<?php

declare(strict_types=1);

namespace App\Service\Note;

use App\Service\BaseService;
use App\Exception\Note;
use App\Repository\NoteRepository;
use Respect\Validation\Validator as v;

abstract class Base extends BaseService
{
    /** @var NoteRepository */
    protected $noteRepository;

    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    protected static function validateNoteName(string $name): string
    {
        if (!v::length(1, 50)->validate($name)) {
            throw new Note('El nombre de la nota no es válido.', 400);
        }

        return $name;
    }

    protected function getNoteFromDb(int $noteId): \App\Entity\Note
    {
        return $this->noteRepository->checkAndGetNote($noteId);
    }
}
