<?php

declare(strict_types=1);

namespace App\Controller\Task;

use App\Service\Task\Find;
use App\Service\Task\Create;
use App\Service\Task\Update;
use App\Service\Task\Delete;

abstract class Base
{
    protected $_taskRepository;

    public function __construct()
    {
        $this->_taskRepository = new \App\Repository\TaskRepository();
    }

    protected function getServiceFindTask(): Find
    {
        return new Find($this->_taskRepository);
    }

    protected function getServiceCreateTask(): Create
    {
        return new Create($this->_taskRepository);
    }

    protected function getServiceUpdateTask(): Update
    {
        return new Update($this->_taskRepository);
    }

    protected function getServiceDeleteTask(): Delete
    {
        return new Delete($this->_taskRepository);
    }
}
