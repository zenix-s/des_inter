<?php
include_once 'conexion.php';

class User extends Conexion{
    public function userExist($user, $pass){
        $query = $this->conectar()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function addUser($user, $pass, $name){
        if($this->userExist($user, $pass)){
            return false;
        }else{
            $query = $this->conectar()->prepare('INSERT INTO usuarios (username, password, nombre) VALUES (:user, :pass, :name)');
            $query->execute(['user' => $user, 'pass' => $pass, 'name' => $name]);
            return true;
        }
    }
    public function getFullName($user){
        $query = $this->conectar()->prepare('SELECT nombre FROM vendedores WHERE username = :user');
        $query->execute(['user' => $user]);
        if($query->rowCount()){
            $result = $query->fetchAll();
            foreach ($result as $row) {
                $name = $row['nombre'];
            }
            return $name;
        }else{
            return $user;
        }
    }
}

?>