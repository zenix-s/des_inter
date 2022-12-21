<?php
    if(!isset($_POST['editar'])){
        header('Location: index.php?error');
    }
    include 'conexion.php';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $ciudad = $_POST['ciudad'];
    $profesion = $_POST['profesion'];
    $id = $_POST['id'];

    $sql = $conexion->prepare("UPDATE empleados SET nombre = ?, apellidos = ?, edad = ?, ciudad = ?, profesion = ? WHERE cod_empresa = ?");
    $resultado = $sql->execute([$nombre, $apellidos, $edad, $ciudad, $profesion, $id]);
    if($resultado === true){
        header('Location: index.php?id='.$id);
    }else{
        echo "No se han podido actualizar los datos";
    }
?>