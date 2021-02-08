/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  matomas
 * Created: 4 feb. 2021
 */

DELIMITER //

drop table if exists usuario;

//
create table usuario(
    id_usu int AUTO_INCREMENT primary key,
    nombre_usu varChar(30) ,
    pass varchar(255),
    nombre varchar(50),
    apellidos varchar(100),
    email varchar(100),
    telefono varchar(9),
    direccion varchar(100),
    poblacion varchar(50),
    provincia varchar(50),
    comunidad_autonoma varchar(50),
    fecha_nac date,
    spam boolean default false,
    unique(nombre_usu)
);
//
