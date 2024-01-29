<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ultils/style.css">
    <title>Desafio 02 - 
        <?php
        $titulo = "Gerar Número Aleatório";
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
        <?php 
            echo "Valor Aleatório:".  rand(1,10);
        ?>
        <button onclick="javascript:document.location.reload()">Gerar Outro</button>

    </section>
</body>
</html>