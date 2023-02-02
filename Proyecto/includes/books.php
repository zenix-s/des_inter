<?php

include_once 'conexion.php';

class books extends Conexion{
    public function booksExist($isbn){
        $query = $this->conectar()->prepare('SELECT * FROM libros WHERE isbn = :isbn');
        $query->execute(['isbn' => $isbn]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function addBook($isbn, $titulo, $autor, $editorial, $precio){
        if(!$this->booksExist($isbn)){
            $query = $this->conectar()->prepare('INSERT INTO libros (isbn, titulo, autor, editorial, precio) VALUES (:isbn, :titulo, :autor, :editorial, :precio)');
            $query->execute(['isbn' => $isbn, 'titulo' => $titulo, 'autor' => $autor, 'editorial' => $editorial, 'precio' => $precio]);
            return true;
        }else{
            return false;
        }
    }

}

?>