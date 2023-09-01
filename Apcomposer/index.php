<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //o autoload vai ser responsável por importar o arquivo
    require "./vendor/autoload.php";
    //indicamos a localização que o a classe está, pro auto load identificar
    $config = new Core\ConfigController();
    ?>
</body>
</html>