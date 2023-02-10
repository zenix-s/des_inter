<?php

if(isset($_POST['addBook'])){
    include_once '../includes/books.php';
    $cover = "";
    $book = new books();
    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $precio = $_POST['precio'];
    $img = $_FILES['img_cover']['name'];
    if($img == null){
        $cover = "";
    }else{
        $ruta = $_FILES['img_cover']['tmp_name'];
        $size = getimagesize($ruta);
        $sizepx = $size[0] * $size[1];
        $type = $_FILES['img_cover']['type'];
        $maxsize = 1700 * 2600;
        if($size > $maxsize){
            echo "<script>alert('El archivo es demasiado grande');</script>";
            return;
        }elseif($type != "image/jpeg" && $type != "image/png" && $type != "image/gif" && $type != "image/jpg"){
            echo "<script>alert('El archivo no tiene una extensión permitida, se permiten: jpg, png, gif, jpeg');</script>";
            return;
        }
        $destino = "../img/portadas/".$isbn.".jpg";
        if(file_exists($destino)){
            unlink($destino);
        }
        copy($ruta, $destino);
        $cover = $isbn.".jpg";

    }

    echo ("<script>alert('".$isbn. " " .$cover."');</script>");
    if($book->addBook($isbn, $titulo, $autor, $editorial, $precio, $cover)){
        header("Location: ../views/booksTable.php");
    }else{
        header("Location: ../views/booksTable.php");
        echo "<script>alert('isbn ya existe');</script>";
    }
}elseif(isset($_POST['updateBook'])){
    include_once '../includes/books.php';
    $cover = "";
    $book = new books();
    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $precio = $_POST['precio'];
    $img = $_FILES['img_cover']['name'];
    if($img == null){
        $cover = "";
    }else{
        $ruta = $_FILES['img_cover']['tmp_name'];
        $size = $_FILES['img_cover']['size'];
        $type = $_FILES['img_cover']['type'];
        $sizepx = $size[0] * $size[1];
        $maxsize = 1700 * 2600;
        if($size > $maxsize){
            echo "<script>alert('El archivo es demasiado grande');</script>";
            return;
        }elseif($type != "image/jpeg" && $type != "image/png" && $type != "image/gif" && $type != "image/jpg"){
            echo "<script>alert('El archivo no tiene una extensión permitida, se permiten: jpg, png, gif, jpeg');</script>";
            return;
        }
        $destino = "../img/portadas/".$isbn.".jpg";
        if(file_exists($destino)){
            unlink($destino);
        }
        copy($ruta, $destino);
        $cover = $isbn.".jpg";
    }

    if($book->updateBook($isbn, $titulo, $autor, $editorial, $precio, $cover)){
        header("Location: ../views/booksTable.php");
    }else{
        header("Location: ../views/booksTable.php");
        echo "<script>alert('error a ocurrido');</script>";
    }
}else{
    header("Location: ../views/booksTable.php");
}

?>