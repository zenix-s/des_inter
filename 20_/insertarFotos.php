<?php
$resultado=null;
if(isset($_POST['subir'])){

    $name=$_FILES['imagen']['name'];

    $tmp_name=$_FILES['imagen']['tmp_name'];
    $error=$_FILES['imagen']['error'];
    $size=$_FILES['imagen']['size'];
    $max_size=487 * 487;
    $type=$_FILES['imagen']['type'];
    $nombre=$_REQUEST['nombre'];

    if($error){
        $resultado = "Ha ocurrido un error";
    }else if($size > $max_size){
        $resultado = "El tamaño del archivo supera el maximo permitido, 1 MB";
    }else if($type != 'image/jpg' && $type != 'image/jpeg' && $type != 'image/png' && $type != 'image/gif'){
        $resultado = "Los tipos de archivos permitidos son : JPG|JPEG|PNG|GIF";
    }else{
        
        $ruta = "imagenes/".$name;
        move_uploaded_file($tmp_name,$ruta);
        require('conexion.php');
        /*$conexion = mysqli_connect("localhost","root","","aplicacion");
        mysqli_query($conexion, "INSERT INTO jugadores(nombre,foto) VALUES('$nombre','$ruta')");
        mysqli_close($conexion);
        insertamos el archive binario que hemos obtenido y lo guardamos en la base de datos Mysql*/
        
    $sql = $conexion->prepare("INSERT INTO fotos (nombre,foto) VALUES(?,?);");
    $resultado = $sql->execute([$nombre,$ruta]);
     header("Location: index.php");
    }

}





?>