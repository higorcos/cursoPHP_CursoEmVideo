<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo -
        <?php
        $titulo = "10 - Requisição de arquivos";

        echo "$titulo";
        ?>
    </title>
</head>

<body>
    <header>
        <hr> ##<br>
        <!-- Include => se o arquivo não existir o programa não trava  -->
        <!-- require => arquivo é obrigatorio -->
        <?php
        include __DIR__ . "/header.php";


        ?>
    </header>
</body>

</html>