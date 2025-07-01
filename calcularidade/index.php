<!DOCTYPE html>
<head>
    <title>Calcular Idade</title>
</head>
<body>
    <H3>Calcular Idade</H3>
    <br>
    <form action="calcularidade.php" method="POST">


        <label for="nome">Digite o seu nome:</label>
        <br>
        <input type="text" name="nome">
        <br>
        <br>

        <label for="anoatual">Digite o ano atual:</label>
        <br>
        <input type="number" name="anoatual">
        <br>
        <br>
        <label for="anonacemento">Digite o ano de Nascimento:</label>
        <br>
        <input type="number" name="anonacimento">
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>