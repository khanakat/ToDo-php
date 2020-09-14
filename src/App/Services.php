<?php

declare(strict_types=1);

use App\Service\Note;
use App\Service\Task;
use App\Service\User;

$container['find_user_service'] = static function ($containerRepository): User\Find {
    return new User\Find($containerRepository['user_repository']);
};

$container['create_user_service'] = static function ($containerRepository): User\Create {
    return new User\Create($containerRepository['user_repository']);
};

$container['update_user_service'] = static function ($containerRepository): User\Update {
    return new User\Update($containerRepository['user_repository']);
};

$container['delete_user_service'] = static function ($containerRepository): User\Delete {
    return new User\Delete($containerRepository['user_repository']);
};

$container['login_user_service'] = static function ($containerRepository): User\Login {
    return new User\Login($containerRepository['user_repository']);
};

$container['find_task_service'] = static function ($containerRepository): Task\Find {
    return new Task\Find($containerRepository['task_repository']);
};

$container['create_task_service'] = static function ($containerRepository): Task\Create {
    return new Task\Create($containerRepository['task_repository']);
};

$container['update_task_service'] = static function ($containerRepository): Task\Update {
    return new Task\Update($containerRepository['task_repository']);
};

$container['delete_task_service'] = static function ($containerRepository): Task\Delete {
    return new Task\Delete($containerRepository['task_repository']);
};

$container['find_note_service'] = static function ($containerRepository): Note\Find {
    return new Note\Find($containerRepository['note_repository']);
};

$container['create_note_service'] = static function ($containerRepository): Note\Create {
    return new Note\Create($containerRepository['note_repository']);
};

$container['update_note_service'] = static function ($containerRepository): Note\Update {
    return new Note\Update($containerRepository['note_repository']);
};

$container['delete_note_service'] = static function ($containerRepository): Note\Delete {
    return new Note\Delete($containerRepository['note_repository']);
};
