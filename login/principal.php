<link rel="stylesheet" href="css/style.css">

<?php

    $nome=$_POST['nome'];
    $senha=$_POST['senha'];


    if($nome == "Pedro" && $senha == 123){
        echo 'Bem Vindo ' .$nome;
    }
    else{
        echo 'Usuário ou senha incorreto(a)';
        include "login.php";
        header("location: login.php");
    }


?>