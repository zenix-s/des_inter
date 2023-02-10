<?php

include_once 'conexion.php';

class Vendedores extends Conexion{
    public function vendedorExist($dni){
        $query = $this->conectar()->prepare('SELECT * FROM vendedores WHERE dni = :dni');
        $query->execute(['dni' => $dni]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function addVendedor($dni, $nombre){
        if($this->vendedorExist($dni)){
            return false;
        }else{
            $query = $this->conectar()->prepare('INSERT INTO vendedores (dni, nombre) VALUES (:dni, :nombre)');
            $query->execute(['dni' => $dni, 'nombre' => $nombre]);
            return true;
        }
    }
    public function updateVendedor($old_dni, $dni, $nombre){
        if($this->vendedorExist($old_dni)){
            $query = $this->conectar()->prepare('UPDATE vendedores SET dni = :dni, nombre = :nombre WHERE dni = :old_dni');
            $query->execute(['dni' => $dni, 'nombre' => $nombre, 'old_dni' => $old_dni]);
            return true;
        }else{
            return false;
        }
    }
    public function deleteVendedor($dni){
        if($this->vendedorExist($dni)){
            $query = $this->conectar()->prepare('DELETE FROM vendedores WHERE dni = :dni');
            try{
                $query->execute(['dni' => $dni]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }else{
            return false;
        }
    }
    public function getVendedorId($id){
        $query = $this->conectar()->prepare('SELECT * FROM vendedores WHERE id_vendedor = :id');
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}

?>