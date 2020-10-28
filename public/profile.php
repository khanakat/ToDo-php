<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';

if (!isset($_SESSION['userToken'])) {
    header('Location: /');
    exit();
} else {
    $user = $_SESSION['userToken'];
}
?>

<?php require_once __DIR__ . '/partials/head.php'; ?>

<body>
    <header>
        <?php require_once __DIR__ . '/partials/nav.php'; ?>
    </header>

    <main>
        <section>
            <h1>Mi Perfil</h1>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col"><?php echo $user->id ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td><?php echo $user->name ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Correo</th>
                        <td><?php echo $user->email ?></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <?php require_once __DIR__ . '/partials/footer.php'; ?>

</body>

</html>