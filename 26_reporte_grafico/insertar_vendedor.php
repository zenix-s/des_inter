<?php
$conexion = mysqli_connect('localhost', 'root', '', 'prueba') or die("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db($conexion, 'prueba') or die("Error no se ha podido conectar a la base de datos");

if (isset($_POST['insertar'])) {
    $nombre = $_POST['nombre'];
    $ventas = $_POST['ventas'];

    $consulta = "INSERT INTO ventas (nombre, ventas) VALUES ('$nombre', '$ventas')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        header("Location: index.php");
    } else {
        echo "Error al insertar datos";
    }
}

?>