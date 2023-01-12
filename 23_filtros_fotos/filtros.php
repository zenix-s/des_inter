<?php
$resultado = null;
if(isset($_POST["enviar"])){
    $name = $_FILES["foto"]["name"];
    $tmp = $_FILES["foto"]["tmp_name"];
    $error = $_FILES["foto"]["error"];
    $size = $_FILES["foto"]["size"];
    $sizepx = getimagesize($tmp);
    $sizepx = $sizepx[0] * $sizepx[1];
    $maxsize = 487 * 487;
    $type = $_FILES["foto"]["type"];
    $nombre = $_REQUEST["txtnom"];

    if($error){
        $resultado = "No se ha podido cargar el archivo";
        echo $resultado;
    }elseif ($size > $maxsize) {
        $resultado = "El archivo es demasiado grande";
        echo $resultado;
    }elseif($type != "image/jpeg" && $type != "image/png" && $type != "image/gif" && $type != "image/jpg"){ 
        $resultado = "El archivo no tiene una extensión permitida, se permiten: jpg, png, gif, jpeg";
        echo $resultado;
    }else{
        $ruta = "img/".$nombre . ".jpg";
        move_uploaded_file($tmp, $ruta);
        require "conexion.php";
        $sql = $conexion -> prepare("INSERT INTO foto(nombre, foto) VALUES (?, ?);");
        $resultado = $sql -> execute([$nombre, $ruta]);
        header("location: index.php");
    }
    // echo $sizepx . " " . $maxsize;
}
?>