<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo - 
    <?php
            $titulo = "Formulários com PHP";
        
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
        <form action="cad.php" method="post">
            <label for="nome"> Nome </label>
            <input type="text" name="nome" id="idNome">
            <label for="sobrenome"> Sobrenome </label>
            <input type="text" name="sobrenome" id="idSobrenome">
            <input type="submit" value="ENVIAR">
        </form>
    </section>
</body>
</html>