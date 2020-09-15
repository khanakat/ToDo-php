<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';

/* if (isset($_SESSION['user'])) {
    header("Location: /perfil");
} */

if (isset($_POST['login_email']) && isset($_POST['login_password'])) {
    if (!empty($_POST['login_email']) && !empty($_POST['login_password'])) {
        try {
            $user = new \App\Entity\User;
            $user->updateEmail($_POST['login_email']);
            $user->updatePassword($_POST['login_password']);
            $logged = new \App\Controller\User\Login($user);
            $_SESSION['user'] = $logged;
            var_dump($logged);
        } catch (Exception $ex) {
            echo '<script language="javascript">alert("ERROR: ' . $ex->getMessage() . '")</script>';
        }
    } else {
        echo '<script language="javascript">alert("ERROR: No se permiten campos vacios")</script>';
    }
}
?>

<?php require_once __DIR__ . '/partials/head.php'; ?>

<body>
    <div>
        <?php require_once __DIR__ . '/partials/nav.php'; ?>
    </div>

    <h1>Inicio</h1>
    <p>Applicación para administrar tareas de usuarios.</p>

    <div>
        <h2>Login</h2>
        <form method="POST" action="/">
            <div>Correo: <input type="text" name="login_email"></div>
            <div>Contraseña: <input type="password" name="login_password"></div>
            <div><button type="submit">Iniciar Sesión</button></div>
        </form>
    </div>

    <div>
        <?php require_once __DIR__ . '/partials/footer.php'; ?>
    </div>
</body>

</html>