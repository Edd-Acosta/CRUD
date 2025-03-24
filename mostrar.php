<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">
    <script type="text/javascript" src="js/script.js"></script>
    <title>Document</title>
</head>
<header>
    <section id="espacio"></section>
    <section id="banner"><img src="img/fiart.jpg"/> </section>
    <section id="fecha">
        <div id="calendar">
            <p class="calendar-date"></p>
            <p class="calendar-date"></p>
            <p id="calendar-month-year"></p>
        </div>
    </section>
</header><br>
<body>
    <center>
        <h3>CATALOGO DE PRODUCTOS</h3><br><br>
        <table border=0>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th>Material</th>
                    <th>Tama&ntilde;o</th>
                    <th>Fabricante</th>
                    <th>Muestra</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("php/abre.php");
                    $consulta = "SELECT * FROM oaxaca";
                    $resultado = $conexion->query($consulta);
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['descri']; ?></td>
                    <td><?php echo $row['color']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['materi']; ?></td>
                    <td><?php echo $row['tamano']; ?></td>
                    <td><?php echo $row['fabric']; ?></td>
                    <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"></td>
                    <td><a href="php/modificar.php?id=<?php echo $row['id']; ?>"><img height="35px" src="img/cam.png"></a></td>
                    <td><a href="php/eliminar.php?id=<?php echo $row['id']; ?>"><img height="30px" src="img/borr.png"></a></td>
                </tr> 
                <?php
                    }
                ?>
            </tbody>
        </table>
        <br><br>
        <a href="php/agregar.php"><button>Agregar producto</button></a>
    </center>
</body>
</html>
