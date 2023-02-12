<?php

include_once '../includes/books.php';

$libro = new books();
if(isset($_GET['isbn'])){
    $isbn = $_GET['isbn'];
    if($libro->deleteBook($isbn)){
        header("Location: ../views/booksTable.php");
    }else{
        header("Location: ../views/booksTable.php");
        echo "<script>alert('No se ha podido eliminar');</script>";
    }
}else{
    header("Location: ../views/booksTable.php");
}

?>