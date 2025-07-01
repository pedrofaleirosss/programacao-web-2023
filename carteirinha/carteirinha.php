<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteirinha</title>
    <link rel="stylesheet" href="css/estileira.css">
</head>
<body>

    <div class="container">

    <?php
    $nome = $_POST['nome'];
    $escola = $_POST['escola'];
    $curso = $_POST['curso'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data = $_POST['data'];
    $matricula = $_POST['matricula'];

    $target_dir = "fotos/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){

    }else{
        echo "Não deu...";
    }

    ?>

    <img src="<?php echo $target_file; ?>">

    
    <div class="info">
       <?php
    echo "Nome: " .$nome . "<br>" ."<br>";
    echo "Escola: " .$escola . "<br>" ."<br>";
    echo "Curso: " .$curso . "<br>" ."<br>";
    echo "CPF: " .$cpf . "<br>" ."<br>";
    echo "RG: " .$rg . "<br>" ."<br>";
    echo "Data de Nascimento: " .$data . "<br>" ."<br>";
    echo "Matrícula: " .$matricula . "<br>";
    ?> 
    </div>
    

    

    </div>

    
</body>
</html>


