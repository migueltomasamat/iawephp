<?php
    $logeado = false;
?>
<div id="menu">
    <ul>
        <li> <a href=../index.php>Inicio</a></li>
        <?php
            if($logeado==true){
                echo "<li>Mi Cuenta</li>";
                echo "<li>Desconectar</li>";
            }else{
                echo "<li><a href='../login.html'>Acceder</a></li>";
                echo "<li><a href='../register.php'>Registrarse</a></li>";
            }
        ?>
        <li> Sobre nosotros </li>
    </ul>
</div>
