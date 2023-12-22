<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ultils/style.css">
    <title>Desafio 05 - 
        <?php
        $titulo = "Analisando um número Real";
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
       $valor = $_POST['valor'] ?? null;
 

       if($valor != null){
  
        
        $arr2 = explode(".", $valor);
       
        echo ("Valor Normal: $valor
        <br>Valor Inteiro: $arr2[0]
        <br>Valor Decimal: $arr2[1]");
        }else{
            echo "Erro";
        }
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button> 
    </section>
</body>
</html>

