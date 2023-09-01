<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "./iCurso.php";
        require "./CursoPosGraduacao.php";
        require "./CursoGraduacao.php";

        $cursoPosGraduacao = new CursoPosGraduacao;
        echo $cursoPosGraduacao->disciplina("Desenvolvimento Web");
        echo $cursoPosGraduacao->professor("Celke");

        $cursoGraduacao = new CursoGraduacao;
        echo $cursoGraduacao->disciplina("Cálculo 1");
        echo $cursoGraduacao->professor("Sergio");
    ?>
</body>
</html>