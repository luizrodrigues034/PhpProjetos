<?php
    class Conn{
        public $host = "localhost";
        public $user = "root";
        public $pass = "";
        public $dbname = "track";
        public $connect = null;

        public function conectar(){
            try{
                $this->connect = new PDO("mysql:host=". $this->host. ";dbaname=". $this->dbname,$this->user,  $this->pass);
                return $this->connect;
            }catch(Exception $err){
                echo"Erro: Conexão não realizada com sucesso";
                return false;
            }
        }
    }

?>