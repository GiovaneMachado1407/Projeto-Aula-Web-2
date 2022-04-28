<?php
    if( isset($_POST["email"])) {
        $email = $_POST['email'];
    } else {
        $email = null;
    }

    
    if( isset($_POST['pass'])){
        $pass = $_POST['pass'];
    } else {
        $pass = null;  
    }

    if($email != null && $pass != null){
        if($email == 'gabriel@ig.net' && $pass == '1234'){
            $msg = 'Bem vindo';
            $redirect = "meta http-equiv='refresh' content='3; url=../index.php'/>";
        } else {
            $msg = "Acesso negado!";
            $redirect = "meta http-equiv='refresh' content='3; url=../index.php'/>"; 
        }
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Captura de dados</title>
    </head>
    <body>
        <h1><?php echo isset ($msg) ? $msg: "Visitante" ?></h1>
            <?= isset ($redirect) ? $redirect : "<hr>" ?>

            <form method="get" action="pedido.php">
                <h3> Itens: </h3>
                <input type="checkbox" name="ingrediente[]" value="Pão com gergelim"/> Pão com gergelim <br>
                <input type="checkbox" name="ingrediente[]" value="Hamburguer"/> Hamburguer <br>
                <input type="checkbox" name="ingrediente[]" value="Alface"/> Alface <br>
                <input type="checkbox" name="ingrediente[]" value="Queijo"/> Queijo <br>
                <input type="checkbox" name="ingrediente[]" value="Molho especial"/> Molho especial <br>
                <input type="checkbox" name="ingrediente[]" value="Cebola"/> Cebola <br>
                <input type="checkbox" name="ingrediente[],,,,,,,,,,,,,," value="Picles"/> Picles <br>

                <h3> Quantidade </h3>
                <input type="number" name="qtde" value="1" min="1"/>

                <h3> Pagamento: </h3>
                <input type="radio" name="pgto" value="Dinheiro" checked/> Dinheiro
                <input type="radio" name="pgto" value="Pix" checked/> Pix
                <input type="radio" name="pgto" value="Cartão" checked/> Cartão

                <h3> Entrega: <h3>
                <select name="entrega" required>
                    <option value=""> Selecione...</option>
                    <option value="Alvorada"> Alvorada</option>
                    <option value="Viamão"> Viamão</option>
                    <option value="Porto Alegre"> Porto Alegre</option>
                    <option value="Gravatai"> Gravatai</option>
                    <option value="Cachoeirinha"> Cachoeirinha</option>
                    <option value="Canoas"> Canoas</option>
                </select>
                <br><br>
                <input type="submit" value="Enviar dados"/>
                <input type="reset" value="Limpar"/>

            </form>
    </body>
</html>