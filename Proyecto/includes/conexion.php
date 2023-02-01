<?php
    class Conexion{
        private $host;
        private $bbdd;
        private $user;
        private $pass;

        public function __construct(){
            $this -> host = "localhost";
            $this -> bbdd = "biblioteca";
            $this -> user = "root";
            $this -> pass = "";
        }
        function conectar(){
            try{
                $conexion = new PDO('mysql:host='.$this->host.';dbname='.$this->bbdd,$this->user,$this->pass);
                $conexion->exec("SET CHARACTER SET utf8");
                return $conexion;
            }catch(Exception $e){
                echo "No se ha podido conectar con la base de datos" . $e->getMessage();
            }
        }
    }
?>