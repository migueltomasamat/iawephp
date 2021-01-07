<?php
//Voy a poner un comentario en PHP

           include '../funciones/cadenas.php';
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
           
           $x=4;
           $y=17;
           
           echo '<h2>Ejemplos de bucles</h2>';
           
           if ($x == $y){ 
               echo "Se muestra el ejemplo del if";
           }elseif ($x!=$y){
               echo "Esta es la parte del else";
           }else{
               echo "Este else es una puta chorrada";
           }
           
           while ($x<99){
               echo "<br>El valor de \$x es: $x";
               $x+=$y;
               echo '<br>El valor de $x es: '.$x;

              
           }
           
           echo "<h3>Ejemplo de utilización de un bucle do-while </h3>";
           
           $condicion=0;
           
           do{
               echo "El valor de \$condicion es: ".++$condicion;
           }while($condicion==0);
               
           echo "<h3>Ejemplo de utilización de un bucle for </h3>";
           
           
           for($i=0; $i<11; $i++)
           {
               echo("</br>Se ha aumentado una unidad a \$i");
           }
           
           
           echo "</br>El valor de \$i es: $i";
           $x= 15;
           
           switch ($x){
               case 10:
                   echo "</br>Se ha recibido el valor de 10";
                   break;
                   
               case 11:
                   echo "</br>Se ha recibido el valor de 11";
                   break;
               default:
                   echo "</br>Se ha entrado en el valor de default";
                   break;
           }
           
           echo "Este es el resultado".letraCapital($nombrePlanta);
           
