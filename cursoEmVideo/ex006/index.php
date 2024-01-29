<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo - 
    <?php
            $titulo = "Expressões Aritméticas";
        
           echo "$titulo";  
        ?>
    </title>
</head>
<body>
    <header>

        <h1>
            <?php
           echo "$titulo";  
           ?>
    </h1>
    </header>
    <section>
       
    </section>
    <?php

        $result = 50/2+3**2;
        echo "$result <br>";

        // + => somar
        // . => concatenar
        $result2 = '2' + '2';
        var_dump($result2);
        $result2 = '2' . '2';
        var_dump($result2);



        //valor absoluto de um numero (valor sem sinal)
        $valorAbsoluto = abs(-200);
        echo "$valorAbsoluto <br>";

        //Conversor de bases
        $convertendo_base = base_convert(254,10,2); //(numero,baseAtual,baseDestino)
        echo "$convertendo_base <br>";

            
        ?>
</body>
</html>