<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <a href="index.php">Listar</a>
    <a href="create.php">Cadastrar</a>
    <h1>Cadastrar Usúario</h1>

    <?php
        
        require "./Users.php";
        require "./Conn.php";
        //Estamos recebendo os dados inseridos pelo usuario no html, e recebendo eles no php
        //dados do formulario
        $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        //var_dump($formData);        
        //Verifica se o usuário passou algum valor no formulario.
        if(!empty($formData['SendAddUser'])){
            
            $createUser = new Users();
            $createUser->formData = $formData;
            $value = $createUser->create();
            if($value){
                $_SESSION['msg'] = "<p style = 'color: green;'>Cadastro realizado com sucesso</p>";
                header("Location: index.php");
            }

        }else{
            echo"Cadastre-se";
        }
    ?>
    <form name="CreateUser" method = "POST" action="">
    <label>Nome: </label>
    <input type = "text" name = "name" placeholder="Nome Completo" required /><br></br>

    <label>Email: </label>
    <input type = "text" name = "email" placeholder="Melhor e-mail" required /><br></br>

    <input type="submit"    value = "Cadastrar" name="SendAddUser"/>
</form>
    
</body>
</html>