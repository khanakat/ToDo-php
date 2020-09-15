<?php

declare(strict_types=1);

namespace App\Controller\Task;

use App\Controller\BaseController;

abstract class Base extends BaseController
{
    protected function getServiceFindTask(): \App\Service\Task\Find
    {
        return new \App\Service\Task\Find($this->_taskRepository);
    }

    protected function getServiceCreateTask(): \App\Service\Task\Create
    {
        return new \App\Service\Task\Create($this->_taskRepository);
    }

    protected function getServiceUpdateTask(): \App\Service\Task\Update
    {
        return new \App\Service\Task\Update($this->_taskRepository);
    }

    protected function getServiceDeleteTask(): \App\Service\Task\Delete
    {
        return new \App\Service\Task\Delete($this->_taskRepository);
    }
}
