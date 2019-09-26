<?php
    require "conexion.php";
    $reglas = "";
    $web = $_POST['web'];
    //$consultaDireccionWeb = "select direccion_web from paginas_web where direccion_web = '$web';";
    $todo = "select direccion_web from paginas_web;";
    $resultado = mysqli_query($conexion, $todo);
    //$datos = mysqli_fetch_array($resultado);
    while($row = mysqli_fetch_array($resultado)){  
        $reglas = $reglas . $row['direccion_web'] . "   ";    
    }
    if($resultado) {
        echo $reglas;
    } else {
        echo "Búsqueda Fallida";
    }
?>