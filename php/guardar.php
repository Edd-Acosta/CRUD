<?php

    include("abre.php");
    $Imagen    = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    $nombre    = $_POST['nombre'];
    $descri    = $_POST['descri'];
    $color    = $_POST['color'];
    $precio   = $_POST['precio'];
    $materi    = $_POST['materi'];
    $tamano    = $_POST['tamano'];
    $fabric    = $_POST['fabric'];
    


    $consulta = "INSERT INTO oaxaca(nombre, descri, color, preciom materi, tamano, fabric, Imagen)  VALUES ('$nombre', '$descri', '$color', '$precio', '$materi', '$tamano', '$fabric', '$Imagen')";

    if ($conexion->query($consulta) === TRUE){
        header("Location: ../mostrar.php");
    }else{
        echo "Error: " . $consulta . "<br>" . $conexion->error;
    }
    $conexion->close();

?>