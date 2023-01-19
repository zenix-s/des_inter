<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir imagenes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

    </header>
    <main>
        <section id="container_forms">
            <!-- Añadir fotos -->
            <div class="container_form">
                <form action="filtros.php" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <label>Nombre</label>
                        <input type="text" name="txtnom" id="nombre">
                    </div>
                    <label for="foto" id="upload">
                        Subir imagen
                        <input type="file" name="foto" id="foto" style="display:none;">
                    </label>
                    <label id="filename">No se ha seleccinado ninguna imagen</label>
                    <input type="submit" value="Subir" name="enviar">
                </form>
            </div>
            <!-- Eliminar -->
            <div class="container_form">
                <form action="eliminar.php" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <label>Nombre</label>
                        <input type="text" name="deltxtnom" id="nombre">
                    </div>
                    <input type="submit" value="Eliminar Foto" name="enviar">
                </form>
            </div>
            <!-- Buscar -->
            <div class="container_form">
                <form action="buscar.php" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <label>Nombre</label>
                        <input type="search" name="searchtxtnom" id="nombre">
                    </div>
                    <input type="submit" value="Buscar Foto" name="enviar">
                </form>
            </div>
        </section>
        <section id="container_fotos">
            <?php
                include_once 'conexion.php';
                $sql = mysqli_query($conexion, "SELECT * FROM foto");
                while($res =mysqli_fetch_array($sql)){
                    echo "<article><h1>".$res['nombre']."</h1>";
                    echo "<img src='".$res['foto']."' style=' width='200' height='200''></article>";
                }
            ?>
        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>