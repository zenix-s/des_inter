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

    public function addBook($isbn, $titulo, $autor, $editorial, $precio, $cover){
        if(!$this->booksExist($isbn)){
            $query = $this->conectar()->prepare('INSERT INTO libros (isbn, titulo, autor, editorial, precio, portada) VALUES (:isbn, :titulo, :autor, :editorial, :precio, :cover)');
            $query->execute(['isbn' => $isbn, 'titulo' => $titulo, 'autor' => $autor, 'editorial' => $editorial, 'precio' => $precio, 'cover' => $cover]);
            return true;
        }else{
            return false;
        }
    }

    public function updateBook($isbn, $titulo, $autor, $editorial, $precio, $cover){
        if($this->booksExist($isbn)){
            if($cover == ""){
                $query = $this->conectar()->prepare('UPDATE libros SET titulo = :titulo, autor = :autor, editorial = :editorial, precio = :precio WHERE isbn = :isbn');
                $query->execute(['isbn' => $isbn, 'titulo' => $titulo, 'autor' => $autor, 'editorial' => $editorial, 'precio' => $precio]);
            }else{
                $query = $this->conectar()->prepare('UPDATE libros SET titulo = :titulo, autor = :autor, editorial = :editorial, precio = :precio, portada = :cover WHERE isbn = :isbn');
                $query->execute(['isbn' => $isbn, 'titulo' => $titulo, 'autor' => $autor, 'editorial' => $editorial, 'precio' => $precio, 'cover' => $cover]);
            }
            return true;
        }else{
            return false;
        }
    }

}

?>