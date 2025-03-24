<?php

    include("abre.php");
    $id = $_REQUEST['id'];


    $nombre    = $_POST['nombre'];
    $descri    = $_POST['descri'];
    $color    = $_POST['color'];
    $precio    = $_POST['precio'];
    $materi    = $_POST['materi'];
    $tamano    = $_POST['tamano'];
    $fabric    = $_POST['fabric'];

    $Imagen  = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $consulta = "UPDATE oaxaca SET nombre='$nombre' , descri='$descri', color='$color', precio='$precio', materi='$materi' tamano='$tamano', fabric='$fabric', Imagen='$fabric', WGERE id='$id'";


    $resultado = $conexion->query($consulta);

    if($resultado){
            header("Location: ../mostrar.php");
    }else{
        echo "no se modifico";
    }

    ?>