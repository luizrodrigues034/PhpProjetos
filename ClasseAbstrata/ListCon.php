<?php
    require "./Conn.php";
    class ListCon extends Conn{
        public object $conn;
        public function listConnect():array{
            $this->conn = $this->connect(); 
            //var_dumb($this->conn);
            //Selecione as colunas ID, NAME, EMAIL, DA COLUNA USER ORDERNADO POR ID
            $query_users = "SELECT id, name, email FROM users ORDER BY id DESC LIMIT 40";
            //Diz para preparar a query
            $result_users = $this->conn->prepare($query_users);
            $result_users->execute();
            $retorno = $result_users->fetchAll();
            //var_dump($retorno);
            return $retorno;
        }   

    }
?>