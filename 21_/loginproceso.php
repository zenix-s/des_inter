<?php
// trabajar con sesiones
session_start();
include_once 'conexion.php';
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
// consulta a la base de datos
$sentencia = $conexion->prepare("SELECT * FROM t_usuario WHERE nombre_usu = ? AND password_usu = ?;");
$sentencia->execute([$usuario, $pass]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);
if ($datos === false) {
    header('Location: login.php');
} elseif($sentencia->rowCount() == 1) {
    $_SESSION['nombre'] = $datos->nombre_usu;
    header('Location: index.php');
}