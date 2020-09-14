<?php

declare(strict_types=1);

namespace App\Controller\Task;

use App\Controller\BaseController;
use App\Service\Task\Create;
use App\Service\Task\Delete;
use App\Service\Task\Find;
use App\Service\Task\Update;

abstract class Base extends BaseController
{
    protected function getServiceFindTask(): Find
    {
        return $this->container['find_task_service'];
    }

    protected function getServiceCreateTask(): Create
    {
        return $this->container['create_task_service'];
    }

    protected function getServiceUpdateTask(): Update
    {
        return $this->container['update_task_service'];
    }

    protected function getServiceDeleteTask(): Delete
    {
        return $this->container['delete_task_service'];
    }
}
