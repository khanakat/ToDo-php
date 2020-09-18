<nav>
    <?php if (isset($_SESSION['user'])) { ?>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/profile.php">Perfil</a></li>
            <li><a href="/users.php">Usuarios</a></li>
            <li><a href="/notes.php">Notas</a></li>
            <li><a href="/tasks.php">Tareas</a></li>
            <li><a href="/logout.php">Cerrar Sesión</a></li>
        </ul>
    <?php } else { ?>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/notes.php">Notas</a></li>
        </ul>
    <?php } ?>
</nav>