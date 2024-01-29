<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo - 
    <?php
            $titulo = "Formulários retroalimentados";
        
           echo "$titulo";  
        ?>
    </title>
</head>
<body> 
    <?php
     //Capturando os dados do formulário Retroalimnetado 
         $valor0 = $_GET['valor0']??0;
         $valor1 = $_GET['valor1']??0;
    ?>
    <header>

        <h1>
            <?php
           echo "$titulo";  
           ?>
    </h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="valor">Valor</label>
                <input type="number" name="valor0" value="<?=$valor0?>" id="idvalor0" step="0.01">
                <label for="valor">Valor</label>
                <input type="number" name="valor1" value="<?=$valor1?>" id="idvalor2" step="0.01">
                <input type="submit" value="ENVIAR">
        </form>
    </main>
</body>
</html>