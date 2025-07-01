<?php
    /*
    operadores matemáticos no PHP
   |____________|Matemática|PHP|
   |Somar       |   +      | + |
   |subtrair    |   -      | - |
   |dividir     |   ÷      | \ |
   |multplicar  |   X      | * |

-------------------------------------------------------
    Comandos Condicinais do PHP

    if(codição lógica)
    {
        condição verdadeira false
    }
-------------------------------------------------------
    else
    {
        condição falsa false
    }
-------------------------------------------------------
    switch(ler valor de variavel)
    {
        case 1:
        echo 'Domingo';
        break;

        case2:
        echo 'Segunda';
        break;
    defult

    }
-------------------------------------------------------



    */



    echo '<h3>Calcular Idade</h3>';
    $nome=$_POST['nome'];
    $anoatual=$_POST['anoatual'];
    $anonascimento=$_POST['anonacimento'];
    $idade=$anoatual-$anonascimento;
    echo 'Sua idade é ' . $idade . '<br>';
        if($idade>=18){
            echo $nome.' é maior de idade.';
        }
        else{
            echo $nome.' é menor de idade.';
        }

?>