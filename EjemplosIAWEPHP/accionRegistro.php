<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ('./funciones/funcionesBD.php');


if ($_POST["contrasenya"]!=$_POST["contrasenya2"]){
    echo "Las contraseñas no coinciden, vuelva a rellenar el formulario.";
    echo "<a href='./register.php'>Vuelva al formulario de registro</a>";
}else{
    //$con= conectarBD();
    if ($con= mysqli_connect("mariadb","miguel","leugim","iawe")){
       echo "Se ha conectado correctamente.";
    } else {
        echo "No se ha conectado a la base de datos.";
    }
    //$sql = "INSERT INTO usuario VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
    $sql = "INSERT INTO usuario (nombre_usu,pass,nombre,apellidos,email,telefono,direccion,poblacion,provincia,comunidad_autonoma,fecha_nac,spam) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
    
    $pass = password_hash($_POST["contrasenya"], PASSWORD_DEFAULT);
    
    $sentencia = mysqli_stmt_init($con);
    
    //$sentencia = mysqli_prepare($sentencia, $sql);
    
    mysqli_stmt_prepare($sentencia, $sql);
    
    
    
    $nick = $_POST["nick"];
    mysqli_stmt_bind_param($sentencia, 'sssssssssssi',$_POST["nick"],$pass,$_POST["nombre"],$_POST["apellidos"],$_POST["correo"],$_POST["telefono"],$_POST["direccion"],$_POST["poblacion"],$_POST["provincia"],$_POST["comunidad_autonoma"],$_POST["fechanac"],$_POST["publicidad"]);
    //mysqli_stmt_bind_param($sentencia, 's',$nick);
    
    if (mysqli_execute($sentencia)){
        echo "Se ha insertado el usuario en la base de datos";
    }else{
        echo "ERROR. No se ha podido insertar el usuario.";
    }
    
    mysqli_close($con);
}
