<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação</title>
</head>
<body>
    <?php
        require "./Disciplina.php";
        //usando o objeto média sem instanciar a classe
        echo "Media ". Disciplina::$media . "<br>";

        $disciplina = new Disciplina("José", 3, 4);

        echo $disciplina->situacao();

        //Acessar o método sem criar o objeto
        echo Disciplina::situacaoAluno(7);
        ?>
</body>
</html>