<?php   
    if (!class_exists('Conn')) {
    abstract class Conn{
        
        public string $host = "localhost";
        public string $user = "root";
        public string $pass = "";
        public string $dbname = "abstrata";
        public object $connect;

        public function connect(){
            try {
                $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=".$this->dbname, $this->user, $this->pass );
                echo("Conexão realizada com sucesso");
                return $this->connect;
            } catch(Exception $err) {
                //Usamos die quando o erro for exibido, para que ele exiba de forma formatada no progrma;
                echo "Falha na conexão com o Banco de Dados". $err->getMessage();
                //die("Falha na conexão com o Banco de Dados"). $err->getMessage();
                return false;
            }
        }
    }
    }

?>