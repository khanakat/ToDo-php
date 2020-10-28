<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';

if (isset($_SESSION['userToken'])) {
    $user = $_SESSION['userToken'];
}

try {
    $notes = new \App\Service\Note\Find();
    $rows = $notes->getAll();
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
            <h1>Notas</h1>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Modificado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $row->id ?></th>
                            <td><?php echo $row->name ?></td>
                            <td><?php echo $row->description ?></td>
                            <td><?php echo $row->createdAt ?></td>
                            <td><?php echo $row->updatedAt ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>

    <?php require_once __DIR__ . '/partials/footer.php'; ?>
</body>

</html>