<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo - 

    <?php
            $nome = "Tipos Primitivos";
        
           echo "$nome";  
        ?>
    </title>
</head>
<body>
    <h1>
    <?php
           echo "$nome";  
        ?>
    </h1>
        <?php
        //0x = hexadecimal
        //0b = binário
        //0  = Octal

        $v0 = 300;
        $v1 = 45.8;
        $v2 = 3e2;  //toda potencia será como float (3 x 10^2)
        $v3 = (float) 300;  //forçando a ser float
        $v4 = (int) "950";

        $v5 = true;
        $v6 = false;


        var_dump($v0); // Vai falar o tipo
        var_dump($v1); 
        var_dump($v2); 
        var_dump($v3); 
        var_dump($v4); 


        echo("<br/> <br/>Valor booleano Não é mostrado em print/echo <br/>");
        var_dump($v5); 
        echo("<br/> Valor: $v5 <br/>");
        var_dump($v6); 
        echo("<br/> Valor: $v6 <br/>");

    //tipo compostos
    echo("<br/>");

    $vet = [6,2.3,'maria', 3];
    var_dump($vet); 
    echo("<br/>");

    class Pessoa {
        private string $nome;
    }

    $p0 = new Pessoa;

    var_dump($p0);









    //tipo especiais



        
        ?>
</body>
</html>