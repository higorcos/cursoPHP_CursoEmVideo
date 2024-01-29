<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo - 
    <?php
            $titulo = "Operadores";
        
           echo "$titulo";  
        ?>
    </title>
</head>
<body> 
    <header>
        
 

    <hr> ##Incremento <br>


    <?php
        $incrementoA = 0; 
        $incrementoB = 0;

        //Funciona com valores possitivos e negativos
        $incrmento = [
            "pós-incremento" => $incrementoA++, // Na proxima referencia o valor aparecerá com o incremento
            "pre-incremento" => ++$incrementoB, // Na Mudar logo;
        ];

        echo "<br>";
        var_dump($incrmento);

        echo "<br>";

    ?>




    </header>
</body>
</html>