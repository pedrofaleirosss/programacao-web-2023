<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<center>
    <div id="tudo">
    <h1>Login</h1>
    <br>
    <br>
    <form action="principal.php" method="POST">

    <label for="nome">Digite o nome de usuário:</label>
    <br>
    <input type="text" name="nome" class="caixa">
    <br>
    <br>
    
    <label for="senha">Digite a senha:</label>
    <br>
    <input type="password" name="senha" class="caixa">
    <br>
    <br>

    <input type="submit" value="Entrar" id="botao">

    </form>
    </div>

</center>



</body>
</html>