<?php
// trabajar con sesiones
// iniciar sesion
session_start();
include_once 'conexion.php';
$usuario = $_POST['usuario2'];
$clave = $_POST['clave2'];
// consulta a la base de datos
$sentecia = $bd->prepare("SELECT * FROM t_usuario WHERE nombre_usu = ? AND password_usu = ?;");
$sentecia->execute([$usuario, $clave]);
$datos = $sentecia->fetch(PDO::FETCH_OBJ);
if ($datos === false) {
    header('Location: login.php');
} elseif($sentecia->rowCount() == 1) {
    $_SESSION['nombre'] = $datos->nombre_usu;
    header('Location: index.php');
}
?>