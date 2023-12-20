<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ultils/style.css">
    <title>Desafio 01 - 
        <?php
        $titulo = "Antecessor e Sucessor";
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
    
        <form action="backend.php" method="post">
            <label for="numero">Número</label>
            <input type="text" name="numero" id="idNumero">
            <input type="submit" value="ENVIAR">
        </form>

    </section>
</body>
</html>