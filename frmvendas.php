<?php
include('conexao.php');
try {
    $sql = "insert into tblvendas (idvendedor,idproduto,qtd) values (:idvendedor,:idproduto,:qtd)";
    $stmt = $con->prepare($sql);
    $stmt-> bindValue(":idvendedor",$_POST["idvendedor"]);
    $stmt-> bindValue(":idproduto",$_POST["idproduto"]);
    $stmt-> bindValue(":qtd",$_POST["qtd"]);
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
    <h1>Cadastro de Vendas</h1>
    <!--método de envio são 2
        *method="get" - envia sem segurança, pois exibe os dados na url - mais rápido
        *method="post" - oculta os dados na url - mais lento
-->
    <form method="post">
            Nº do Vendedor <input type="text" name="idvendedor"><br><br>
            Código do Produto <input type="text" name="idproduto"><br><br>
            Quantidade <input type="text" name="qtd"><br><br>

    <input type="submit" value="Cadastrar">
    </form>
    <br>
    <a href="index.php">Menu Principal</a>

</body>
</html>