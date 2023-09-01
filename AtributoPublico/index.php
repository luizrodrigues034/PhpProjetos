<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "./Funcionario.php";
        $funcionario = new Funcionario;
        $funcionario->salario= 1500.52;
        $funcionario->nome = "José";
        //métodos privados e atributos privados não podem ser utilizados fora da classe
        echo $funcionario->verSalario(); 
        //echo $funcionario->converterSalario();
    ?>
</body>
</html>