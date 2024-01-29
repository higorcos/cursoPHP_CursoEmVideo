<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ultils/style.css">
    <title>Desafio 05 - 
        <?php
            $titulo = "Conversor de Moedas API";
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
       date_default_timezone_set('America/Sao_Paulo');
       $dataInicio = date("m-d-Y", strtotime("-7 days")); 
        $dataFim =  date("m-d-Y");
        
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dataInicio.'\'&@dataFinalCotacao=\''.$dataFim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';


        $dados = json_decode(file_get_contents($url),true);
        $cotacao = $dados['value'][0]['cotacaoCompra'];
   
    
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