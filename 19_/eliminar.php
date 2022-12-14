<?php
    if (!isset($_GET['id'])) {
        header('Location: index.php?error');
    }
    include 'conexion.php';
    $id = $_GET['codigo'];
    $sql = $conexion->prepare("DELETE FROM empleados WHERE cod_empresa = ?");
    $resultado = $sql->execute([$id]);
    if ($resultado) {
        header('Location: index.php');
    } else {
        echo "No se han podido eliminar los datos";
    }
?>