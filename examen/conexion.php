<?php
$host = "localhost";
$bbdd = "exameninterfaces2";
$dbuser = "root";
$dbpass = "rootpass123";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bbdd", $dbuser, $dbpass);
    $conexion->exec("SET CHARACTER SET UTF8");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
