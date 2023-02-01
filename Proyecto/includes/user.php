<?php
include_once 'conexion.php';

// select * from usuarios where id = 1 divide entre prepare y execute
$sentencia_select = $conexion->prepare('SELECT *FROM usuarios WHERE id_user = ?');
$sentencia_select->execute([1]);
$resultado = $sentencia_select->fetch();

// if exist print nombre
if ($resultado !== false) {
    echo $resultado[0];
} else {
    echo "No existe el registro con ese ID";
}

?>