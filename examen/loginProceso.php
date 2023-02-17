<?php

$usuario = $_POST['txtUsuario'];
$pass = $_POST['txtContra'];
echo $pass . "<br>";

include_once 'conexion.php';

$consulta = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
$consulta-> execute([$usuario, $pass]);

if ($consulta->rowCount() == 1) {
    $fila = $consulta->fetch();
    session_start();
    $_SESSION['usuario'] = $fila['usuario'];
    header('Location: index.php');
} else {
    header('Location: registrarse.php');
}




?>