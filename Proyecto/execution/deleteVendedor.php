<?php

include_once '../includes/Vendedores.php';
if(isset($_GET['dni'])){
    $vendedor = new Vendedores();
    $dni = $_GET['dni'];
    if($vendedor->deleteVendedor($dni)){
        header("Location: ../views/vendedores.php");
    }else{
        header("Location: ../views/vendedores.php");
        echo "<script>alert('dni no existe');</script>";
    }
}else{
    header("Location: ../views/vendedores.php");
}

?>