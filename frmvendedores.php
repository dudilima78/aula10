<?php
include('conexao.php');
try {
    $sql = "insert into tblvendedores (vendedor,dtadmissao,salario) values (:vendedor,:dtadmissao,:salario)";
    $stmt = $con->prepare($sql);
    $stmt-> bindValue(":vendedor",$_POST["vendedor"]);
    $stmt-> bindValue(":dtadmissao",$_POST["dtadmissao"]);
    $stmt-> bindValue(":salario",$_POST["salario"]);
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
</head>
<body>
    <h1>Cadastro de Vendedores</h1>
    <!--método de envio são 2
        *method="get" - envia sem segurança, pois exibe os dados na url - mais rápido
        *method="post" - oculta os dados na url - mais lento
-->
    <form method="post">
            Vendedor <input type="text" name="vendedor"><br><br>
            Data de Admissão <input type="date" name="dtadmissao"><br><br>
            Salário <input type="text" name="salario"><br><br>

    <input type="submit" value="Cadastrar">
    </form>
    <br>
    <a href="index.php">Menu Principal</a>

</body>
</html>