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
    <main>
        <section id="container_form">
            <form action="valida_foto.php" method="post" enctype="multipart/form-data">
                <h1>Nombre</h1>
                <input type="text" name="txtnom" id="nombre">
                <label for="foto" id="upload">
                    Subir imagen
                    <input type="file" name="foto" id="foto" style="display:none;">
                </label>
                <input type="submit" value="Subir">
            </form>
        </section>
        <section id="container_fotos">
            <?php
                include_once 'conexion.php';
                $sql = mysqli_query($conexion, "SELECT * FROM foto");
                while($res =mysqli_fetch_array($sql)){
                    echo "<article><h1>".$res['nombre']."</h1>";
                    echo "<img src='".$res['foto']."' width='200' height='200'></article>";
                }
            ?>
        </section>
    </main>
</body>

</html>