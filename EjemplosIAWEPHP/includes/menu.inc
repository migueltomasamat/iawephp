<?php
    
    if (isset($_SESSION["logeado"]))
        $logeado = $_SESSION["logeado"];
?>
<div id="menu">
    <ul>
        <li> <a href=../index.php>Inicio</a></li>
        <?php
            if($logeado==true){
                echo "<li>Mi Cuenta</li>";
                echo "<li>Desconectar</li>";
                echo "Bienvenido ".$_SESSION["nombre"];
            }else{
                echo "<li><a href='../formularioLogin.php'>Acceder</a></li>";
                echo "<li><a href='../register.php'>Registrarse</a></li>";
                echo "<li><a href='../ejemploschorras/formularioEntrenador.php'>EjemploEntrenador</a></li>";
            }
        ?>
        <li> Sobre nosotros </li>
    </ul>
</div>
