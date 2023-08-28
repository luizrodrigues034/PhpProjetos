<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheque</title>
</head>
<body>
    <a href="index.php">Listar</a>
    <a href="create.php">Create</a>
    <h1>Cadastrar usuário</h1>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        require "./Users.php";
        require "./Conn.php";
    /*  A classe abstrata não pode se instanciada

        $cheque = new Cheque(207.27, "comum");
        $msg = $cheque->verValor();
        echo$msg;
    */ //Instanciando uma Classe Filha, agora passamos o valor na hora que instanciamos, por causa do método

        echo "<hr>";
        $listUsers = new Users;
        $result_users= $listUsers->listConnect();
        
        echo "<hr>";

        foreach($result_users as $row_user){
            //var_dump($row_user);
            extract($row_user);

            echo "O ID do Usario $id <br>";
            echo "O NOME do Usario $name <br>";
            echo "O EMAIL do Usario $email <br>";
            echo "<a href='view.php?id=$id'>Vizualizar</a><br>";
            echo "<a href='edit.php?id=$id'>Editar</a><br>";
            echo "<a href='delete.php?id=$id'>Delete</a>";
            echo "<hr>";
        }

        
    ?>
    
</body>
</html>