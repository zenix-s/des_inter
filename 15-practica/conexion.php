<?php
// CREAR VARIABLES PARA CREAR LA CLAVE, USUARIO, NOMBRE DE LA BBDD
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prueba";
try{
    $conexion = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
}catch(Exception $e){
    echo "Error al conectarse a la base de datos " . $e->getMessage();
}
?>