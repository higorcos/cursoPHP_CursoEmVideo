<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo - 
    <?php
            $titulo = "Resultado Formulários com PHP";
        
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
   <main>

       <?php
       $n = $_POST["nome"] ?? "";
       $s = $_POST['sobrenome'] ?? "";
      
        echo("<p>SEU NOME É: $n $s</p>")
      ?>

      </main>
</body>
</html>