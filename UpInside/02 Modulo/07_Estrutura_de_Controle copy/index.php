<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo -
        <?php
        $titulo = "07_Estrutura_de_Controle";

        echo "$titulo";
        ?>
    </title>
</head>

<body>
    <header>



        <hr> ##<br>


        <?php

        $var = 0;

        // Avaliado como verdadeiro porque $var está vazia
        if (empty($var)) {
            echo '$var é 0, vazia ou não definida';
        }
        echo '<br>';

        // Avaliado como verdadeiro porque $var está definida
        if (isset($var)) {
            echo '$var está definida embora esteja vazia';
        }
        ?>

        ?>




    </header>
</body>

</html>