<?php
    session_start();
    ob_start();
    //Receber ID do usuario
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualizar</title>
</head>
<body>
    <a href="index.php">Listar</a>
    <a href="create.php">Create</a>
    <h1>Detalhes do usuário</h1>
    <?php
    //menssagem de erro pro usuario
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            
        }
        //verificar se ID tem valor
        if(!empty($id)){
            require "./Users.php";
            require "./Conn.php";
            echo "Id do usuário ".$id."<br>";
           //Instancia a classe, utiliza o método view para extarir seus valores;
            $viewUsers= new Users();
            $viewUsers->id = $id;
            $valueUser = $viewUsers->view();

            //var_dump($valueUser);
            //Pelo que eu entendi o método extract deixa disponivel as variaveis que você pucho do banco, e você formata da melhor maneira.
            extract($valueUser);
            echo"Esse é o ID do usuário:". $id;
            echo"<br>Esse é o name do usuário:". $name;
            echo"<br>Esse é o email do usuário:". $email;
            echo"<br>Esse é o data de criação do usuário:". date('d/m/Y H:i:s', strtotime($created));
            
            echo"Editado";
            //verifcia se existe alguma modificação no perfi do usuario, se tiver vai mostrar a data que foi feita
            if(!empty($modified)){
                echo date('d/m/Y H:i:s', strtotime($modified));
            }
            

        }else{
            $_SESSION['msg'] = "<p style = 'color: #f00;'>Usuário não encontrado</p>";
            header("Location: index.php");
        }
    ?>
    
</body>
</html>