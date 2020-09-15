<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database\DbProvider;
use App\Repository\{NoteRepository, TaskRepository, UserRepository};

abstract class BaseController
{
    protected $_userRepository;
    protected $_noteRepository;
    protected $_taskRepository;
    private $_db;

    public function __construct()
    {
        $this->_db = DbProvider::get();
        $this->_userRepository = new UserRepository($this->_db);
        $this->_noteRepository = new NoteRepository($this->_db);
        $this->_taskRepository = new TaskRepository($this->_db);
    }
}
