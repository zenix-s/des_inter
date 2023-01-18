<?php
require("conexion.php");
$nombre = $_POST['deltxtnom'];
$conexion = mysqli_connect("localhost", "root", "", "prueba");
$db = mysqli_select_db($conexion, "prueba"); // $db = mysqli_select_db($conexion, $basededatos);
// Función php para reconocer los simbolos latinos
mysqli_set_charset($conexion, "utf8");
// Crea la consulta
$query = mysqli_query($conexion, "SELECT * FROM foto WHERE foto.nombre = '$nombre'");
// comprobar si existe o hay duplicado de ese nombre
$fila = mysqli_fetch_row($query);
$resultado = mysqli_query($conexion, "DELETE FROM foto WHERE foto.nombre = '$nombre'");
if($resultado === false){
    echo 
    "<script>
        alert('Error en la consulta');
        window.location.replace('index.php');
    </script>";
}else if(mysqli_affected_rows($conexion) === 0){
    echo 
    "<script>
        alert('No existen registros que coincidan');
        window.location.replace('index.php');
    </script>";
}else if(mysqli_affected_rows($conexion)>=1){
    echo 
    "<script>
        alert('Archivo borrado correctamente');
        window.location.replace('index.php');
    </script>";
}
mysqli_close($conexion);

?>