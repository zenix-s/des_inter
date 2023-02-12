<?php

include_once '../includes/Vendedores.php';

if(isset($_POST['addVendedor'])){
    $vendedor = new Vendedores();
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    if($vendedor->addVendedor($dni, $nombre)){
        header("Location: ../views/vendedores.php");
    }else{
        header("Location: ../views/vendedores.php");
        echo "<script>alert('dni ya existe');</script>";
    }
}elseif(isset($_POST['updateVendedor'])){
    $vendedor = new Vendedores();
    $old_dni = $_POST['old_dni'];
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    if($vendedor->updateVendedor($old_dni, $dni, $nombre)){
        header("Location: ../views/vendedores.php");
    }else{
        header("Location: ../views/vendedores.php");
        echo "<script>alert('dni no existe');</script>";
    }
}else{
    header("Location: ../views/vendedores.php");
}

?>