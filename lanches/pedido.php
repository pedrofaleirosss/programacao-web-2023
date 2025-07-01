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

    <?php
        $valor = 0;
        $valorC = 0;
        $total = 0;

        $lanche = $_POST['lanche'];
        
        if($lanche == "X Tudo"){
            $valor = 20;
        }
        else if($lanche == "X Salada"){
            $valor = 12;
        }
        else if($lanche == "X Egg"){
            $valor = 15;
        }



    ?>
    
    <div class="conta">
        <p>Detalhes do Pedido:</p>
        
        <div class="infoConta">
            <?php
            echo $lanche . " - R$". $valor . ",00" . "<br>";

            if(isset($_POST['batata'])){
                echo "Batata Frita - R$10,00"."<br>";
                $valorC = $valorC + 10;
            }
            if(isset($_POST['cheddar'])){
                echo "Cheddar - R$5,00" . "<br>";
                $valorC = $valorC + 5;
            }
            if(isset($_POST['nuggets'])){
                echo "Nuggets - R$10,00" . "<br>";
                $valorC = $valorC + 10;
            }
            
            ?>
        </div>

        <p>Total:</p>

        <div class="infoConta">
            <?php
            $total = $valor + $valorC;
            echo "R$" .$total . ",00";
            ?>
        </div>
        
    </div>

</body>
</html>