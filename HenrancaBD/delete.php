<?php
session_start();
ob_start();

//Recebendo o id da url
//input_get pega o id da url, o nome, e a formatação do elemento
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

var_dump($id);

if(!empty($id)){
    //Incluir arquivos
    require "./Conn.php";
    require './Users.php';

    $delUser = new Users;

    $delUser->id= $id;

    $value = $delUser->delete();
    if($value){
        $_SESSION['msg'] = "<p style = 'color: green;'>Usuário deletado com sucesso </p>";
         header("Location: index.php");
    }else{
        $_SESSION['msg'] = "<p style = 'color: #f00;'>Não foi possivel deletar o objeto</p>";                
    }
}else{
    $_SESSION['msg'] = "<p style = 'color: #f00;'>Erro: Usuário não encontrado</p>";
    header("Location: index.php");
}
?>