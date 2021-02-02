<?php

include("./includes/cabecera.inc");
include("./includes/menu.inc");

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


echo "El usuario que se ha introducido es: ".$_GET["nombre_usuario"]."</br>";
echo "La contraseña que se ha introducido es: ".$_GET["pass_usuario"]."</br>";


//Comprobar que el usario y la contraseña existen en la base de datos

$_SESSION["logeado"]=true;




include("./includes/pie.inc");
