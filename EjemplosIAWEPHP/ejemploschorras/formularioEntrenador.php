<?php
    include '../includes/cabecera.inc';
    include '../includes/menu.inc';
?>
<div class="contenido">
        <div class="introducción">
            <h1>Formulario de Entrenadores</h1>
            <h2>Introduce los datos del entrenador</h2>
        </div>
    <form class="formulario" action="insercionEntrenador.php" method="post">
        <ul>
            <li>
                <label for="codigo"> Código del entrenador:</label>
                <input type="text" id="codigo" name="codigo_entrenador">
            </li>
            <li>
                <label for="nombreEnt"> Nombre del Entrenador:</label>
                <input type="text" id="nombreEnt" name="nombre_entrenador">
            </li>
            <li>
                <label for="edad"> Edad del entrenador:</label>
                <input type="text" id="edad" name="edad_entrenador">
            </li>
            <li class="button">
                <button type="submit">Enviar</button>

            </li>
        </ul>


    </form>
</div>
<?php
    include '../includes/pie.inc';
?>


