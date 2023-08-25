<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CURSO</title>
</head>
<body>
    <?php
    require "./Usuario.php";
    $listarUsuarios = new Usuario();
    $result_usuarios = $listarUsuarios->listar();
    foreach($result_usuarios as $row_usuario){
        
        extract($row_usuario);
        echo"O id do usúario $id<br>";
    }
    ?>
</body>
</html>