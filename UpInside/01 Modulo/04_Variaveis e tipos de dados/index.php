<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo - 
    <?php
            $titulo = "Variaveis e tipos de dados";
        
           echo "$titulo";  
        ?>
    </title>
</head>
<body> 
    <header>
        
    <hr> ##Variavel variavel  <br>
  
        <?php
        $teste = "teste_001";
        $$teste = "teste";
        echo "Nome da variavel: {$teste}, <br> Valor dentro da variável: {$teste_001}";
        ?>

    <hr> ##Apontamento para variavel<br>


    <?php
        $calcA = 10;
        $calcB = 20;
        echo "Antes da referencia<br>";

        echo "A : {$calcA}  <br>";
        echo "B : {$calcB}";
        echo "<br>Depois da referencia<br>";

        $calcA = &$calcB;

        echo "A : {$calcA}  <br>";
        echo "B : {$calcB}";
    ?>



<hr> ##Apontamento para variavel<br>

    <?php
        $calcA = 10;
        $calcB = 20;
        echo "Antes da referencia<br>";

        echo "A : {$calcA}  <br>";
        echo "B : {$calcB}";
        echo "<br>Depois da referencia<br>";

        $calcA = &$calcB;

        echo "A : {$calcA}  <br>";
        echo "B : {$calcB}";
    ?>

    </header>
</body>
</html>