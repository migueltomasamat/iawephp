<?php
    include '../includes/cabecera.inc';
    include '../includes/menu.inc';


    $cod_ent=$_POST["codigo_entrenador"];
    $nom_ent=$_POST["nombre_entrenador"];
    $edad_ent=$_POST["edad_entrenador"];
    
    echo "Cod_ent: $cod_ent, nombre: $nom_ent, edad: $edad_ent";
    
    $con= mysqli_connect('mariadb','miguel','leugim','iawe');
    
    
    //Conexión a la base de datos
    if(!$con){
        echo "<br/>ERROR: No se ha podido conectar a la base de datos";
    }
    
    
    //Inserción de datos en la base de datos
    $sql="INSERT INTO entrenador VALUES($cod_ent,'$nom_ent',$edad_ent)";
    
    $result = mysqli_query($con, $sql);
    
    if($result){
        echo "<br/>Se ha insertado el entrenador de forma correcta";
    }else{
        echo "<br/>ERROR: No se ha podido insertar el entrenador";
    }
    
    
    $sql="UPDATE entrenador SET edad=$edad_ent+10 WHERE codigo_ent=$cod_ent";
    
    $resultModificar= mysqli_query($con, $sql);
    
    if($resultModificar){
        echo "<br/> Se ha modificado correctamente el entrenador";
       
    }else{
        echo "<br/>ERROR. No se puede modificar al entrenador";
    }
    
    
    $sql="DELETE FROM entrenador where codigo_ent=$cod_ent";
    
    $resultBorrar= mysqli_query($con, $sql);
    
    if($resultBorrar){
        echo "<br/> Se ha borrado correctamente el entrenador";
       
    }else{
        echo "<br/>ERROR. No se puede borrar al entrenador";
    }
    
    
    
    
    include '../includes/pie.inc';
?>
