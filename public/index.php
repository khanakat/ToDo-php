<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';

if (isset($_POST['login_email']) && isset($_POST['login_password'])) {
    if (!empty($_POST['login_email']) && !empty($_POST['login_password'])) {
        try {
            $user = new \stdClass;
            $user->email = $_POST['login_email'];
            $user->password = $_POST['login_password'];
            $logged = new \App\Service\User\Login($user);
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
    <header>
        <?php require_once __DIR__ . '/partials/nav.php'; ?>
    </header>

    <main>
        <section class="login">
            <form method="POST" action="/">
                <div class="box">
                    <h1>Iniciar Sesión</h1>
                    <span>Correo</span>
                    <input type="email" name="login_email" class="email" />
                    <span>Contraseña</span>
                    <input type="password" name="login_password" class="password" />
                    <button class="button" style="vertical-align:middle" type="submit">Entrar</button>
                </div>
            </form>
        </section>
    </main>

    <?php require_once __DIR__ . '/partials/footer.php'; ?>

</body>

</html>