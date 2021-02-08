<?php

include("./includes/cabecera.inc");
include("./includes/menu.inc");
include_once('./funciones/funcionesBD.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Acceso a la información de un formulario con POST
  

echo "El usuario que se ha introducido es: ".$_POST["nombre_usuario"]."</br>";
echo "La contraseña que se ha introducido es: ".$_POST["pass_usuario"]."</br>";
*/

/* Acceso a la información de un formulario con GET*/

$con= conectarBD();

$sql="SELECT nombre_usu,pass FROM usuario WHERE nombre_usu = ?";

$sentencia= mysqli_stmt_init($con);

mysqli_stmt_prepare($sentencia, $sql);

$nombre=$_POST['nombre_usuario'];
mysqli_stmt_bind_param($sentencia, "s", $nombre);

if(mysqli_stmt_execute($sentencia)){
    $resultado= mysqli_stmt_get_result($sentencia);
    $fila= mysqli_fetch_array($resultado);
    $usuario=$fila["nombre_usu"];
    $pass=$fila["pass"];
    
    if(password_verify($_POST["pass_usuario"], $pass)){
        $_SESSION["logeado"]=true;
        $_SESSION["nombre"]=$usuario;
    }else{
        echo "ERROR. Password incorrecto";
    }
    /*Acceso mediante un array asociativo
    while($fila=mysqli_fetch_array($resultado)){
        echo "La constraseña del usuario es: ".$fila['nombre_usu']." y la contraseña: ".$fila['pass'];
    }*/
    
    
    
    /*Acceso mediante un enlace a variables
    mysqli_stmt_bind_result($sentencia, $nombre, $pass);
    while(mysqli_stmt_fetch($sentencia))
        echo "La constraseña del usuario es: $nombre y la contraseña: $pass";*/
    
}else{
    echo "ERROR. No se ha podido ejecutar la consultas sobre la BD.";
}



//echo "El usuario que se ha introducido es: ".$_GET["nombre_usuario"]."</br>";
//echo "La contraseña que se ha introducido es: ".$_GET["pass_usuario"]."</br>";


//Comprobar que el usario y la contraseña existen en la base de datos

//$_SESSION["logeado"]=true;


mysqli_close($con);

include("./includes/pie.inc");
