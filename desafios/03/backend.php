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
       <?php 
       $valor = $_POST['valor'] ?? null;
       if($valor != null){
           $cotacao = 3.10;
           $valorDolar = $valor/$cotacao;
           echo "O valor de R\$ ". number_format($valor,2,",",".").", em dólar fica em U\$". number_format($valorDolar,2,",",".").", na cotação de ". number_format($cotacao,2);
        }else{
            echo "Erro - Valor não informado";
        }
    
       ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </section>
</body>
</html>