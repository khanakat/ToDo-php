<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';

if (!isset($_SESSION['userToken'])) {
    header('Location: /');
    exit();
} else {
    $user = $_SESSION['userToken'];
}

try {
    $users = new \App\Service\User\Find();
    $rows = $users->getAll();
} catch (Exception $ex) {
    echo '<script language="javascript">alert("ERROR: ' . $ex->getMessage() . '")</script>';
}

?>

<?php require_once __DIR__ . '/partials/head.php'; ?>

<body>
    <header>
        <?php require_once __DIR__ . '/partials/nav.php'; ?>
    </header>

    <main>
        <section>
            <h1>Usuarios</h1>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $row->id ?></th>
                            <td><?php echo $row->name ?></td>
                            <td><?php echo $row->email ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>

    <?php require_once __DIR__ . '/partials/footer.php'; ?>
</body>

</html>