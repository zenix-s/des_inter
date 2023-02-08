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
        $destino = "../img/portadas/".$isbn.".jpg";
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