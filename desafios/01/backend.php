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
       <?php 
       $valor = $_POST['numero'] ?? null;
       if($valor != null){
           $valorAnterior = $valor-1;
           $valorPosterior = $valor+1;
           echo "valor anterior: $valorAnterior; 
           <br> valor: $valor;
           <br> valor posterior: $valorPosterior;";
        }else{
            echo "Erro";
        }
    
       ?>
    </section>
</body>
</html>