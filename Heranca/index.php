<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "./Cliente.php";
    require "./ClientePessoaFisica.php";
    require "./ClientePessoaJuridica.php";
    
    $cliente1 = new Cliente();
    $cliente1->logadouro = "Avenida Winston Churchill - A";
    $cliente1->bairro = "Capão Raso";
    $msg = $cliente1->verEndereco();
    echo$msg;
    
    echo "<hr>";

    $clientePF = new ClientePessoaFisica();
    $clientePF->nome = "Luiz";
    $clientePF->cpf = "100.200.300-40";
    $clientePF->logadouro = "Avenida Nicomedes";
    $clientePF->bairro = "Morada da colina";
    $msg3= $clientePF->verInformacaoUsuario();
    echo $msg3;
    
    echo "<hr>";
    
    $clientePJ = new ClientePessoaJuridica();
    $clientePJ->empresa = "Coda-aí";
    $clientePJ->cnpj = "05.311.244/0001-09";
    $clientePJ->logadouro = "Avenida Paulista";
    $clientePJ->bairro = "Jardins";
    $msg3= $clientePJ->verInformacaoUsuario();
    echo $msg3;

    ?>    
</body>
</html>