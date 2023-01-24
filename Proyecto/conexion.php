<?php
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "biblioteca";
    $conexion = mysqli_connect($servidor, $usuario, $password, $basededatos) 
    or die("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db($conexion, $basededatos) 
    or die ("Error no se ha podido conectar a la base de datos");
?>