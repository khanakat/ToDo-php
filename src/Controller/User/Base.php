<?php

declare(strict_types=1);

namespace App\Controller\User;

use App\Controller\BaseController;

abstract class Base extends BaseController
{
    protected function getServiceFindUser(): \App\Service\User\Find
    {
        return new \App\Service\User\Find($this->_userRepository);
    }

    protected function getServiceCreateUser(): \App\Service\User\Create
    {
        return new \App\Service\User\Create($this->_userRepository);
    }

    protected function getServiceUpdateUser(): \App\Service\User\Update
    {
        return new \App\Service\User\Update($this->_userRepository);
    }

    protected function getServiceDeleteUser(): \App\Service\User\Delete
    {
        return new \App\Service\User\Delete($this->_userRepository);
    }

    protected function getServiceLoginUser(): \App\Service\User\Login
    {
        return new \App\Service\User\Login($this->_userRepository);
    }
}
