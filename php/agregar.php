<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <center>
        <h1>Registro de Piezas</h1>
            <form action="guardar.php" method="POST" enctype="multipart/form-data"><br><br>
                
                <input type="text" name="nombre" placeholder="Nombre..." value=""><br><br>
                <input type="text" name="descri" placeholder="Descri..." value=""><br><br>
                <input type="text" name="color" placeholder="Color" value=""><br><br>
                <input type="text" name="materi" placeholder="Material" value=""><br><br>
                <input type="text" name="tamano" placeholder="Tama&tilde;o" value=""><br><br>
                <input type="text" name="fabric" placeholder="Fabricante" value=""><br><br>

                <input type="file" name= "Imagen"/>
                <input type="submit" value="Aceptar"/>
            </form>
    </center>
</body>
</html>