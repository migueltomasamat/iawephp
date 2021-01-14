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
          
           
           
           
           $miarray=["base","escolta","alero","ala-pivot","pivot"];
           
           echo "<br /> La posición 4 es: $miarray[4]";
           
           for($z=0;$z<count($miarray);$z++){
               echo "<br /> La posición $z es: $miarray[$z]";
           }
           
           foreach($miarray as $posicion){
               echo "<br /> El nombre de la posición es: $posicion";
           }
           
           $miarray[5]="entrenador";
           echo "<br /> La posición 5 es: $miarray[5]";
           
           
           $equipos=array(array(),array());
           
           //Equipos de la conferencia este
           $equipos[0][0]="Chicago Bulls";
           $equipos[0][1]="New York Knicks";
           $equipos[0][2]="Washignton Wizars";
           
           //Equipos de la conferencia Oeste
           
           $equipos[1][0]="Golden State Warriors";
           $equipos[1][1]="Sacramento Kings";
           $equipos[1][2]="L.A Lakers";
           
           for($i=0;$i<2;$i++){
               echo "<br/> Mostrando los equipos de una conferencia: ";
               for($z=0;$z<3;$z++){
                   echo $equipos[$i][$z].", ";
               }
           }
           
           
           $sudoku[0][0]=2;
           $sudoku[0][1]=9;
           $sudoku[0][2]=5;
           $sudoku[1][0]=6;
           $sudoku[1][1]=6;
           $sudoku[1][2]=6;
           $sudoku[2][0]=6;
           $sudoku[2][1]=6;
           $sudoku[2][2]=6;
           
           for($i=0;$i<count($equipos);$i++){
               echo "<br/>";
               for($z=0;$z<count($equipos[$i]);$z++){
                   echo "[".$equipos[$i][$z]."]";
               }
           }
           
           echo "<br/>";
           print_r($equipos);
           
           echo "<br/>";
           $posicion = ["1"=>"base","2"=>"escolta", "3"=>"alero", "4"=>"ala-pivot","5"=>"pivot"];
           $posicion = ["escolta"=>"2", "base"=>"1", "alero"=>"3", "ala-pivot"=>"4","pivot"=>"5"];
           
           echo "La posición dos es: $posicion[escolta]<br/>";
           
           foreach ($posicion as $clave=>$valor){
              echo "la posición $clave tiene un valor: ".$valor."<br/>";
           }
           
           
