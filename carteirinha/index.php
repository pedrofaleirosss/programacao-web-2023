<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/estileira.css">
</head>
<body>
    
    <div id="tudo">
        <br>
        <br>
        <h1>Cadastro da Carteirinha</h1>
        <br>

        <form action="carteirinha.php" method="POST" id="a" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <br>
            <input type="text" name="nome" class="caixa" required>

            <br>
            <br>

            <label for="escola">Escola:</label>
            <br>
            <input type="text" name="escola" class="caixa" required>

            <br>
            <br>

            <label for="curso">Curso:</label>
            <br>
            
            <select name="curso" required class="caixa">
                <option selected disabled value="" id="select">Selecione o curso:</option>
                <option>Desenvolvimento de Sistemas</option>
                <option>Administração</option>
                <option>Marketing</option>
                <option>Recursos Humanos</option>
                <option>Enfermagem</option>
                <option>Blue Pen</option>
            </select>

            <br>
            <br>

            <label for="cpf">CPF:</label>
            <br>
            <input type="text" name="cpf" class="caixa" required>

            <br>
            <br>

            <label for="rg">RG:</label>
            <br>
            <input type="text" name="rg" class="caixa" required>

            <br>
            <br>

            <label for="data">Data de nascimento:</label>
            <br>
            <input type="date" name="data" class="caixa" required>

            <br>
            <br>

            <label for="matricula">Matrícula:</label>
            <br>
            <input type="text" name="matricula" class="caixa" required>

            <br>
            <br>

            <label for="imagem">Foto:</label>
            <br>
            <input type="file" name="fileToUpload" class="caixa" required>

            <br>
            <br>
            <br>

            <input type="submit" value="Cadastrar" id="botaoCada">
        </form>
    </div>
    

    


</body>
</html>