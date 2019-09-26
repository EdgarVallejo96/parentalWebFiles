<?php
    require "conexion.php";
    $app = $_POST['app'];
    $consultaApp = "select nombre_paquete from aplicaciones where nombre_paquete = '$app';";
    $resultado = mysqli_query($conexion, $consultaApp);
    $consulta = mysqli_fetch_array($resultado);
    $nombrePaquete = $consulta['nombre_paquete'];
    if($resultado) {
        echo $nombrePaquete;
    } else {
        echo "Búsqueda Fallida";
    }
?>