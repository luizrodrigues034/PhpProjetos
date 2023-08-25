<?php
    class Conn{
        //Dados usados para acessar o banco de dados
        public $host = "localhost";
        public $user = "root";
        public $pass = "";
        public $dbname = "celke";
        //variavel que vai ser responsavel por "armazenar a conexão"
        public $connect = null;

        //função utilizada paraconectar com o banco de dados
        public function conectar(){
            //se executar corretamenta, cai no try
            try{
                $this->connect = new PDO("mysql:host=". $this->host. ";dbname=". $this->dbname, $this->user, $this->pass);
                echo"Conexão realizada com sucesso";
                //Estamos retornando o objeto PDO, para que ele possa serusado em outras partes do codigo;
                return $this->connect;
            }catch(Exception $err){
                echo"Erro: Conexão não realizada com sucesso";
                return false;
            }
        }
    }