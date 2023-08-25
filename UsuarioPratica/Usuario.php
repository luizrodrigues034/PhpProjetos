<?php
    require "./Conn.php";
class Usuario{
    public $connect;
    public function listar(){
        //eSTOU INSTANCIANDO A CLASSE CONN, ESSA CLASSE TEM ACESSO AO BANCO DE DADOS, PRECISAMOS ACESSAR ELE FAZER A REQUSIÇÃO 
        //QUE PRECISAMOS
        $conn = new Conn();
        //a variavel connect está atribuindo o "ACESSO AO banco de dados", está sendo atribuido um valor de banco de dados na váriavel
        $this->connect = $conn->conectar();
        //Query, nela vamos esquever em forma de codigo SQL, os dados que queremos retirar daquele banco.
        $query_usuarios = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT 40";
        $result_usuarios = $this->connect->prepare($query_usuarios);
        $result_usuarios->execute();

        return $result_usuarios->fetchAll();
    }
}