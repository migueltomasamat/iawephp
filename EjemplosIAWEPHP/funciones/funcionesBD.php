<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function conectarBD (){
    $con= mysqli_connect("mariadb","miguel","leugim","iawe");
    if($con){
        echo "La conexión se ha realizado correctamente";
    }else{
        echo "ERROR. No se ha podido realizar la conexión";
    }
    return $con;
}
