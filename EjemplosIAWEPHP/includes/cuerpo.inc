<?php
//Voy a poner un comentario en PHP
           echo '<p>'; 
           echo 'Hola soy miguel y bienvenidos a mi web Mundo';
           echo '</p>';
           
           $nombreAnimal = 'Ocelote';
           $nombrePlanta = 'Ficus';
           
           echo 'El nombre de mi animal favorito es $nombreAnimal';
           
           echo "</br>La plante de abuela más famosa es $nombrePlanta";
           
           echo "</br>"."$nombreAnimal "."$nombrePlanta";
           
           $nombreAnimal=30;
           
           echo "</br>"."$nombreAnimal "."$nombrePlanta";
           
           $nombreOtroAnimal = &$nombreAnimal;
           
           $nombreOtroAnimal = 'Hiena';
           
           echo "</br>"."$nombreAnimal[0] "."$nombrePlanta";
           
           
           /*
            * Esta es mi primera función en PHP
            * Tenemos comentario multilínea para explicar el funcionamiento.
            */
