<?php

include_once '../includes/Ventas.php';

$venta = new Ventas();
if(isset($_POST['addVenta'])){
    $isbn = $_POST['isbn'];
    $id_vendedor = $_POST['id_vendedor'];
    if($venta->addVenta($isbn, $id_vendedor)){
        header("Location: ../views/ventasTable.php");
    }else{
        header("Location: ../views/ventasTable.php");
        echo "<script>alert('isbn o id_vendedor no existen');</script>";
    }
}elseif(isset($_POST['updateVenta'])){
    $id_venta = $_POST['id_venta'];
    $isbn = $_POST['isbn'];
    $id_vendedor = $_POST['id_vendedor'];
    if($venta->updateVenta($id_venta, $isbn, $id_vendedor)){
        header("Location: ../views/ventasTable.php");
    }else{
        header("Location: ../views/ventasTable.php");
        echo "<script>alert('isbn o id_vendedor no existen');</script>";
    }
}else{
    header("Location: ../views/ventasTable.php");
}

?>