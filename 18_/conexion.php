<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prueba";
try{
    $mbd = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
}catch(Exception $e){
    echo "No se ha podido conectar con la base de datos" . $e->getMessage();
}
?>