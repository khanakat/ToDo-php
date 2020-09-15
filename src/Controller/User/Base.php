<?php

declare(strict_types=1);

namespace App\Controller\User;

use App\Service\User\Create;
use App\Service\User\Delete;
use App\Service\User\Find;
use App\Service\User\Update;
use App\Service\User\Login;

abstract class Base
{
    protected $_userRepository;

    public function __construct()
    {
        $this->_userRepository = new \App\Repository\UserRepository();
    }

    protected function getServiceFindUser(): Find
    {
        return new Find($this->_userRepository);
    }

    protected function getServiceCreateUser(): Create
    {
        return new Create($this->_userRepository);
    }

    protected function getServiceUpdateUser(): Update
    {
        return new Update($this->_userRepository);
    }

    protected function getServiceDeleteUser(): Delete
    {
        return new Delete($this->_userRepository);
    }

    protected function getServiceLoginUser(): Login
    {
        return new Login($this->_userRepository);
    }
}
