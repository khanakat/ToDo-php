<?php

declare(strict_types=1);

namespace App\Controller\Note;

use App\Controller\BaseController;

abstract class Base extends BaseController
{
    protected function getServiceFindNote(): \App\Service\Note\Find
    {
        return new \App\Service\Note\Find($this->_noteRepository);
    }

    protected function getServiceCreateNote(): \App\Service\Note\Create
    {
        return new \App\Service\Note\Create($this->_noteRepository);
    }

    protected function getServiceUpdateNote(): \App\Service\Note\Update
    {
        return new \App\Service\Note\Update($this->_noteRepository);
    }

    protected function getServiceDeleteNote(): \App\Service\Note\Delete
    {
        return new \App\Service\Note\Delete($this->_noteRepository);
    }
}
