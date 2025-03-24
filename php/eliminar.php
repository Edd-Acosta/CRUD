<?php

    include("abre.php");
    $id = $_REQUEST['id'];
    echo $id;
    $consulta = "DELETE FROM oaxaca WHERE id = '$id'";
    echo $consulta;
    $resultado = $conexion->query($consulta);

    if($conexion->query($consulta) === TRUE){
        header("Location> ../mostrar.php");
    }else{
        echo "Error: " . $consulta . "<br>" . $conexion->error;
    }
?>