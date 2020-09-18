<div class="btnTheme">
    <button id="bdark">Cambiar Modo</button>
</div>
<nav>
    <?php if (isset($_SESSION['user'])) { ?>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/perfil">Perfil</a></li>
            <li><a href="/usuarios">Usuarios</a></li>
            <li><a href="/notas">Notas</a></li>
            <li><a href="/tareas">Tareas</a></li>
            <li><a href="/logout">Cerrar Sesión</a></li>
        </ul>
    <?php } else { ?>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/notas">Notas</a></li>
        </ul>
    <?php } ?>
</nav>