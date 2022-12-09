<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$ciudad = $_POST['ciudad'];
$profesion = $_POST['profesion'];
$id = $_GET['id'];

$sql = $conexion->prepare("UPDATE personas SET nombre = ?, apellidos = ?, edad = ?, ciudad = ?, profesion = ? WHERE id = ?");
$resultado = $sql->execute(array($nombre, $apellidos, $edad, $ciudad, $profesion, $id));
if($resultado){
    header('Location: index.php');
}else{
    echo "No se han podido actualizar los datos";
}
?>