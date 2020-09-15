<?php

declare(strict_types=1);

namespace App\Controller\Note;

use App\Service\Note\Find;
use App\Service\Note\Create;
use App\Service\Note\Update;
use App\Service\Note\Delete;

abstract class Base
{
    protected $_noteRepository;

    public function __construct()
    {
        $this->_noteRepository = new \App\Repository\NoteRepository();
    }

    protected function getServiceFindNote(): Find
    {
        return new Find($this->_noteRepository);
    }

    protected function getServiceCreateNote(): Create
    {
        return new Create($this->_noteRepository);
    }

    protected function getServiceUpdateNote(): Update
    {
        return new Update($this->_noteRepository);
    }

    protected function getServiceDeleteNote(): Delete
    {
        return new Delete($this->_noteRepository);
    }
}
