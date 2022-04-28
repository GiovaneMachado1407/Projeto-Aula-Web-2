<?php
    if(isset($_GET["ingrediente"])){
        $ingrediente = $_GET["ingrediente"];
    } else {
        $ingrediente = null;
    }

    if(isset($_GET["qtde"])){
        $qtde = $_GET["qtde"];
    } else {
        $qtde = null;
    }

    if(isset($_GET["pgto"])){
        $pgto = $_GET["pgto"];
    } else {
        $pgto = null;
    }

    if(isset($_GET["entrega"])){
        $entrega = $_GET["entrega"];
    } else {
        $entrega = null;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<body>
    <h3> Itens: </h3>
    <?php foreach($ingrediente as $item) : ?>
       <h4> <?= $item ?> </h4>
    <?php endforeach ?>

    <h3> Quantidade: </h3>
    <h4> <?= $qtde ?>

    <h3> Pagamento: </h3>
    <h4> <?= $pgto ?>

    <h3> Entrega: </h3>
    <h4> <?= $entrega ?>
</body>
</html>