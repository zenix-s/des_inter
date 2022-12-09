<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prueba";
try{
    $conexion = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
    $conexion->exec("SET CHARACTER SET utf8");
}catch(Exception $e){
    echo "No se ha podido conectar con la base de datos" . $e->getMessage();
}
?>