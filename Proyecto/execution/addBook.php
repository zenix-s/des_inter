<?php

if(isset($_POST['addBook'])){
    include_once '../includes/books.php';
    $book = new books();
    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $precio = $_POST['precio'];

    if($book->addBook($isbn, $titulo, $autor, $editorial, $precio)){
        header("Location: ../views/tablas.php");
    }else{
        header("Location: ../views/tablas.php");
        echo "<script>alert('isbn ya existe');</script>";
    }
}

?>