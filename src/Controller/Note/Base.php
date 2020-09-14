<?php

declare(strict_types=1);

namespace App\Controller\Note;

use App\Controller\BaseController;
use App\Service\Note\Create;
use App\Service\Note\Delete;
use App\Service\Note\Find;
use App\Service\Note\Update;

abstract class Base extends BaseController
{
    protected function getServiceFindNote(): Find
    {
        return $this->container['find_note_service'];
    }

    protected function getServiceCreateNote(): Create
    {
        return $this->container['create_note_service'];
    }

    protected function getServiceUpdateNote(): Update
    {
        return $this->container['update_note_service'];
    }

    protected function getServiceDeleteNote(): Delete
    {
        return $this->container['delete_note_service'];
    }
}
