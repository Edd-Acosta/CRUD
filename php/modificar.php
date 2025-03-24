<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">
</head>
<body>
    <?php
    include("abre.php");
    $id  = $_REQUEST['id'];

    $consulta = "SELECT * from oaxaca WHERE id = '$id'";

    $resultado = $conexion->query($consulta);
    $a=1;
    $row=$resultado->fetch_assoc();
    ?>
    <center>
        <h1>Actualizacion de datos</h1>
        <form action="actualizar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data"><br><br>

        <input type="text" name="nombre" placeholder="Nombre....." value = "<?php $row ['nombre']; ?>"/><br><br>
        <input type="text" name="descri" placeholder="Descripcion." value = "<?php $row ['descri']; ?>"/><br><br>
        <input type="text" name="color" placeholder="Color....." value = "<?php $row ['color']; ?>"/><br><br>
        <input type="text" name="precio" placeholder="Precio....." value = "<?php $row ['precio']; ?>"/><br><br>
        <input type="text" name="materi" placeholder="Material....." value = "<?php $row ['materi']; ?>"/><br><br>
        <input type="text" name="tamano" placeholder="Tamano....." value = "<?php $row ['tamano']; ?>"/><br><br>
        <input type="text" name="fabric" placeholder="Fabricante....." value = "<?php $row ['fabric']; ?>"/><br><br>

        <td><img height="50px" src="data:image/jpeg;base64,<?php echo base64_encode($row['imagen']); ?>"></td>
        <input type="file" name="Imagen"/>
        <input type="submit" value="Aceptar"/>
        </form>
    </center>
</body>
</html>