<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <style>
        .texto{
            color: blue;
            font-size: 20px;
        }
    </style>

    <h1>Aula 1 de PHP</h1>

    <p>Escolha um item:</p>
    <a href="aula1.php?escolha=flor">Flor</a>
    <a href="aula1.php?escolha=fruta">Fruta</a>
    <a href="aula1.php?escolha=paisagem">Paisagem</a>
    
    <?php
        if(isset($_GET["escolha"])){
            $escolha = $_GET["escolha"];
            echo "<p>Você escolheu: ". $escolha ."</p>";
            if($escolha == "fruta"){
                echo "<img src=''>";
            } elseif($escolha == "flor"){
                echo "<img src=''>";
            } elseif($escolha == "paisagem"){
                echo "<img src=''>";
            }
        }

        $contador = 5;

        for($i = 1; $i <= $contador; $i++){
            echo '<div class="alert alert-primary" role="alert"';
            echo "<p class='texto'>Bom Dia $i</p>";
            echo '</div>';
        }

    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</html>