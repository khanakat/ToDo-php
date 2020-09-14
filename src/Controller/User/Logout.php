<?php

declare(strict_types=1);

namespace App\Controller\User;

final class Logout extends Base
{
    public function __invoke(\App\Entity\User $entity): \App\Entity\User
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 60 * 60,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        unset($_SESSION['user']);
        unset($entity);
        session_destroy();

        return $entity;
    }
}
