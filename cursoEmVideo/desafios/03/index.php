<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ultils/style.css">
    <title>Desafio 03 - 
        <?php
        $titulo = "Conversor de Moedas básico V1";
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
            <label for="valor">Valor</label>
            <input type="number" name="valor" id="idvalor" step="0.01">
            <input type="submit" value="ENVIAR">
        </form>

    </section>
</body>
</html>