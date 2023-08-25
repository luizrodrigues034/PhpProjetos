<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheque</title>
</head>
<body>
    <?php
        require "./Cheque.php";
        require "./ChequeComum.php";
        require "./ChequeEspecial.php";
        require "./ListCon.php";
        require "./Conn.php";
    /*  A classe abstrata não pode se instanciada

        $cheque = new Cheque(207.27, "comum");
        $msg = $cheque->verValor();
        echo$msg;
    */ //Instanciando uma Classe Filha, agora passamos o valor na hora que instanciamos, por causa do método
        $chequeCm= new ChequeComum(1000.46, "Comum");
        $msgChequeCm = $chequeCm->calcularJuros();
        echo $msgChequeCm;

        $chequeEp = new ChequeEspecial(407.47, "Especial");
        $msgChequeEp = $chequeEp->calcularJuros();
        echo $msgChequeEp;

        echo "<hr>";
        $listUsers = new ListCon;
        $result_users= $listUsers->listConnect();
        
        echo "<hr>";

        foreach($result_users as $row_user){
            //var_dump($row_user);
            extract($row_user);

            echo "O ID do Usario $id <br>";
            echo "O NOME do Usario $name <br>";
            echo "O EMAIL do Usario $email <br>";
            echo "<hr>";
        }

        
    ?>
    
</body>
</html>