<?php
    require "./Conn.php";
    class Users extends Conn{
        public object $conn;
        public array $formData;
        public int $id;

        public function listConnect():array{
            //recebe a conexão com o banco de dados
            $this->conn = $this->connectDb(); 
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
        public function create():bool{
            var_dump($this->formData);
            //recebendo a conexão com o banco de dados
            $this->conn = $this->connectDb();
            //Nessa query, no primeiro parenteses, estou passando as colunas que vou passar o valor, no segundo os valores
            $query_user = "INSERT INTO users(name, email, created) VALUES (:name, :email, NOW()) ";
            //ele usa o objeto conn, que recebe a conexão, e usa o prepare para selecionar as informações que ele pediu através da query
            $add_user = $this->conn->prepare($query_user);
            //o bindParam está sendo usadado para vincular os dados que foram inseridos no formulario, com os dos bancos de dados
            //Mais especificamente as colunas
            $add_user->bindParam(':name', $this->formData['name']);
            $add_user->bindParam(':email', $this->formData['email']);
            $add_user->execute();
            //rowCount é o numero de linhas afetadas por query
            if($add_user->rowCount()){
                return true;
            }else{
                return false;
            }
        }
        public function view(){
            $this->conn = $this->connectDb();
            //Aqui selecionamos as váriaveis que vamos exibir na aba view, que vão ser retiradas do bANCO de dados
            $query_user = "SELECT id, name, email, created, modified FROM users 
             WHERE id=:id 
             LIMIT 1";//wHERE->Onde a coluna id deve ser igual a coluna id ///////// LIMIT -> Onde deve retonar apenas 1 registro

             //o objeto conn, é quem guarda a conexão, então passamos uma requesição pra eleque foi definida na $query_user
             $result_user = $this->conn->prepare($query_user);
             $result_user->bindParam(':id', $this->id);
             $result_user->execute();
             //Usamos somente fecth, porque queremos ler apenas um registro
             $value = $result_user->fetch();
             return $value;

        }
        public function edit(){
            $this->conn = $this->connectDb();
            $query_user = "UPDATE users SET name = :name, email = :email, modified = NOW()  
                    WHERE id = :id";
            $edit_user = $this->conn->prepare($query_user);
            $edit_user->bindParam(':name', $this->formData['name']);
            $edit_user->bindParam(':email', $this->formData['email']);
            $edit_user->bindParam(':id', $this->formData['id']);
            $edit_user->execute();
            
            if($edit_user->rowCount()){
                return true;
            }else{
                return false;
            }

        }
        public function delete():bool{
            $this->conn = $this->connectDb();
            $query_del_user = "DELETE FROM users WHERE id=:id LIMIT 1";
            $del_user = $this->conn->prepare($query_del_user);
            $del_user->bindParam(':id', $this->id);
            $value = $del_user->execute();

            return $value;

        }
    }
?>