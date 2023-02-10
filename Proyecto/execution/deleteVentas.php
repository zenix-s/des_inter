<?php

include_once '../includes/Ventas.php';
if(isset($_GET['id_venta'])){
    $venta = new Ventas();
    $id_venta = $_GET['id_venta'];
    if($venta->deleteVenta($id_venta)){
        header("Location: ../views/ventasTable.php");
    }else{
        header("Location: ../views/ventasTable.php");
        echo "<script>alert('id_venta no existe');</script>";
    }
}else{
    header("Location: ../views/ventasTable.php");
}

?>