<?php
include_once 'conexion.php';
// Recibir los datos de los campos
$nombre = $_POST['txtnom'];
// Recibir el nombre de la foto
$nombre_foto = $_FILES['foto']['name'];
// creamos una ruta para guardar el archivo temporal
$ruta = $_FILES['foto']['tmp_name'];
// directorio donde se guardara la foto
$destino = "img/" .$nombre_foto;
// copiar la foto en el directorio
copy($ruta, $destino);
// insertar los datos en la base de datos
$resultado = mysqli_query($conexion, "INSERT INTO foto(nombre, foto) VALUES ('$nombre', '$destino')");
header("location: index.php")
?>