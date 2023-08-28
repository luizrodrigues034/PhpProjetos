<?php
    session_start();
    ob_start();
    //Receber ID do usuario
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    require "./Users.php";
    require "./Conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <a href="index.php">Listar</a>
    <a href="create.php">Create</a>
    <h1>Editar do usuário</h1>
    <?php
    
    //menssagem de erro pro usuario
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            
        }
        $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(!empty($formData['SendEditUser'])){
            
            var_dump($formData);
            $editUser = new Users();
            $editUser->formData = $formData;
            $value = $editUser->edit();
            if($value){
                $_SESSION['msg'] = "<p style = 'color: green;'>Usuário Cadastrado com sucesso!</p>";
            header("Location: index.php");
            }else{
                echo"<p style = 'color: #f00;'>Usuário não encontrado</p>";                
            }
        };
        //verificar se ID tem valor
        if(!empty($id)){
            
            //Receber dados do form
           
            
            echo "Id do usuário ".$id."<br>";
           //Instancia a classe, utiliza o método view para extarir seus valores;
            $viewUsers= new Users();
            $viewUsers->id = $id;
            $valueUser = $viewUsers->view();
            
            //var_dump($valueUser);
            //Pelo que eu entendi o método extract deixa disponivel as variaveis que você pucho do banco, e você formata da melhor maneira.
            extract($valueUser);
            //var_dump($valueUser);
            //$formData = filter_input_array('SendEditUser');
        }
    ?>

    <form name="EditUser" method = "POST" action="">
        <input type="hidden" name="id" value="<?php echo $id ?>" />
       <label>Nome: </label>
        <input type = "text" name = "name" placeholder="Alterar Nome" required /><br></br>

       <label>Email: </label>
       <input type = "text" name = "email" placeholder="Alterar e-mail" required /><br></br>

        <input type="submit"    value = "Editar" name="SendEditUser"/>
    </form>
            
        <?php
        if(empty($id)){
            $_SESSION['msg'] = "<p style = 'color: #f00;'>Usuário não encontrado</p>";
            header("Location: index.php");
        }
    ?>
    

</body>
</html>