<?php
include('conexao.php');
try {
    $sql = "insert into tblclientes (cliente,email) values (:cliente,:email)";
    $stmt = $con->prepare($sql);
    $stmt-> bindValue(":cliente",$_POST["cliente"]);
    $stmt-> bindValue(":email",$_POST["email"]);
    $stmt->execute();
} catch(PDOException $e){
    echo "Não Cadastrou".$e->getCode();

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>


    <h1>Cadastro de Clientes</h1>
    <!--método de envio são 2
        *method="get" - envia sem segurança, pois exibe os dados na url - mais rápido
        *method="post" - oculta os dados na url - mais lento
-->
    <form method="post">
            Cliente <input type="text" name="cliente"><br><br>
            E-mail <input type="text" name="email"><br><br>

    <input type="submit" value="Cadastrar">
    </form>
    <br>
    <a href="index.php">Menu Principal</a>

</body>
</html>