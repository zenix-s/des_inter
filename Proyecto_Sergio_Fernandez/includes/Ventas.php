<?php

include_once 'conexion.php';
// id_venta 	isbn 	id_vendedor 	
class Ventas extends Conexion{
    public function ventaExist($id_venta){
        $query = $this->conectar()->prepare('SELECT * FROM ventas WHERE id_venta = :id_venta');
        $query->execute(['id_venta' => $id_venta]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function addVenta($isbn, $id_vendedor){
        $query = $this->conectar()->prepare('INSERT INTO ventas (isbn, id_vendedor) VALUES (:isbn, :id_vendedor)');
        $query->execute(['isbn' => $isbn, 'id_vendedor' => $id_vendedor]);
        return true;
    }
    public function updateVenta($id_venta, $isbn, $id_vendedor){
        if($this->ventaExist($id_venta)){
            $query = $this->conectar()->prepare('UPDATE ventas SET isbn = :isbn, id_vendedor = :id_vendedor WHERE id_venta = :id_venta');
            $query->execute(['isbn' => $isbn, 'id_vendedor' => $id_vendedor, 'id_venta' => $id_venta]);
            return true;
        }else{
            return false;
        }
    }
    public function deleteVenta($id_venta){
        if($this->ventaExist($id_venta)){
            $query = $this->conectar()->prepare('DELETE FROM ventas WHERE id_venta = :id_venta');
            $query->execute(['id_venta' => $id_venta]);
            return true;
        }else{
            return false;
        }
    }
    public function getVentaId($id_venta){
        $query = $this->conectar()->prepare('SELECT * FROM ventas WHERE id_venta = :id_venta');
        $query->execute(['id_venta' => $id_venta]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

}

?>