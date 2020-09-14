<?php

declare(strict_types=1);

namespace App\Controller\User;

use App\Controller\BaseController;
use App\Service\User\Create;
use App\Service\User\Delete;
use App\Service\User\Find;
use App\Service\User\Update;
use App\Service\User\Login;

abstract class Base extends BaseController
{
    protected function getServiceFindUser(): Find
    {
        return $this->container['find_user_service'];
    }

    protected function getServiceCreateUser(): Create
    {
        return $this->container['create_user_service'];
    }

    protected function getServiceUpdateUser(): Update
    {
        return $this->container['update_user_service'];
    }

    protected function getServiceDeleteUser(): Delete
    {
        return $this->container['delete_user_service'];
    }

    protected function getServiceLoginUser(): Login
    {
        return $this->container['login_user_service'];
    }
}
