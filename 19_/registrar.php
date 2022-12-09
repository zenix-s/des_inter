<?php
    if(isset($_POST['enviar'])){
        include 'conexion.php';
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $ciudad = $_POST['ciudad'];
        $profesion = $_POST['profesion'];
        $sql = $conexion->prepare("INSERT INTO empleados (nombre, apellidos, edad, ciudad, profesion) VALUES (?, ?, ?, ?, ?)");
        $final = $sql->execute([$nombre, $apellidos, $edad, $ciudad, $profesion]);
        if($final){
            header('Location: index.php');           
        }else{
            echo "No se han podido insertar los datos";
        }
    }
?>