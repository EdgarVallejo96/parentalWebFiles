<?php
    require "conexion.php";
    $app = $_POST["app"];
    $restriccion = "insert into paginas_web(direccion_web) values('$app');";
    //$consulta = "update aplicaciones set nombre_paquete = '$app';";
    $resultado = mysqli_query($conexion, $restriccion);
    if($resultado) {
        echo "Ejecución Exitosa";
    } else {
        echo "Ejecución Fallida";
    }
?>
