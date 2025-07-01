<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 de php</title>
</head>
<body>

    <style>
        .titulo{
            color: blue;
            font-size:50px;
        }
        *{
            font-family:sans-serif;
        }
    </style>

    <p class="titulo">Aula 2 de PHP</p>
    
    <?php
        //comentário de uma linha

        /*comentário
        de
        várias
        linhas
        */

        //criar uma variável com o nome completo
        $nome = "pedro alves faleiros";

        $pronomes = array("de", "da", "das", "do", "dos");

        //exibindo o nome da variável no html
        echo "<br>".$nome;
        echo "<br>".strtoupper($nome);
        //primeira letra maiúscula apenas
        echo "<br>".ucwords($nome);

        $vetor_nome = explode(" ", $nome);
        echo "<br>".$vetor_nome[0]. $vetor_nome[count($vetor_nome)-1];

        //formato abnt para autores: SOBRENOME, A. B. (iniciais)
        $sobrenome = $vetor_nome[count($vetor_nome)-1];
        $iniciais = "";

        for($i = 0; $i < count($vetor_nome)-1; $i++){
            if(array_search($vetor_nome[$i], $pronomes) === false){
            $iniciais .= substr($vetor_nome[$i], 0, 1). ". ";
            }
        }
        echo "<br>".  strtoupper($sobrenome. ", " .$iniciais);
    ?>

</body>
</html>