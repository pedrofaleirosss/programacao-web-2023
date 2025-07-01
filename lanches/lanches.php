<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Lanches</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    

    <form action="pedido.php" method="POST" enctype="multipart/form-data" id="caixa">
        <p>Escolha seu lanche:</p>

        <div class="campo" name="lanche">
            <input type="radio" name="lanche" value="X Tudo" id="tudo"><label for="tudo">X Tudo R$20,00</label><br>

            <input type="radio" name="lanche" value="X Salada" id="salada"><label for="salada">X Salada R$12,00</label><br>
        
            <input type="radio" name="lanche" value="X Egg" id="egg"><label for="egg">X Egg R$15,00</label><br>
        </div>
        

        <p>Complementos:</p>

        <div class="campo" name="complemento">
            <input type="checkbox" name="batata" value="Batata Frita" id="batatas"><label for="batatas">Batata Frita R$10,00</label><br>

            <input type="checkbox" name="cheddar" value="Cheddar" id="cheddar"><label for="cheddar">Cheddar R$5,00</label><br>

            <input type="checkbox" name="nuggets" value="Nuggets" id="nuggets"><label for="nuggets">Nuggets R$10,00</label><br>
            <br>
        </div>
        

        <input type="submit" value="Enviar" id="botao">

    </form>
    
</body>
</html>