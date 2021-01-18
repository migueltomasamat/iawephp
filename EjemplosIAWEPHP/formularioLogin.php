<?php
    include './includes/cabecera.inc';
    include './includes/menu.inc';
?>
<div class="contenido">
        <div class="introducción">
            <h1>Inicio de Sesión</h1>
            <h2>Introduce tu nombre de usuario y contraseña</h2>
        </div>
    <form class="formulario" action="login.php" method="get">
        <ul>
            <li>
                <label for="usuario"> Usuario:</label>
                <input type="text" id="usuario" name="nombre_usuario">
            </li>
            <li>
                <label for="pass"> Contraseña:</label>
                <input type="password" id="pass" name="pass_usuario">
            </li>
            <li class="button">
                <button type="submit">Enviar</button>

            </li>
        </ul>


    </form>
</div>
<?php
    include './includes/pie.inc';
?>


