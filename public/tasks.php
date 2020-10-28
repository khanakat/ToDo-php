<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';

if (!isset($_SESSION['userToken'])) {
    header('Location: /');
    exit();
} else{
    $user = $_SESSION['userToken'];
}

try {
    $tasks = new \App\Service\Task\Find();
    $rows = $tasks->getAll();
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
            <h1>Tareas</h1>
            <p><a class="btn btn-lg btn-success" href="#">Agregar</a></p>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Nro. Usuario</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Modificado</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $row->id ?></th>
                            <td><?php echo $row->name ?></td>
                            <td><?php echo $row->description ?></td>
                            <td><?php echo $row->status ?></td>
                            <td><?php echo $row->userId ?></td>
                            <td><?php echo $row->createdAt ?></td>
                            <td><?php echo $row->updatedAt ?></td>
                            <td><button type="button" class="btn btn-primary">Editar</button></td>
                            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>

    <?php require_once __DIR__ . '/partials/footer.php'; ?>
</body>

</html>