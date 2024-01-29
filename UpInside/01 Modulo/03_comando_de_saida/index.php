<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo - 
    <?php
            $titulo = "Comandos de Saida";
        
           echo "$titulo";  
        ?>
    </title>
</head>
<body> 
    <header>
        echo
        print_r
        printf, sprintf
        vprintf
        var_dump
<hr> ##echo <br>
        
            <?php
           echo "sem exemplo";
           ?>

       
<hr> ##print_r => mostrar vetor <br>

        
            <?php

            $array = ["nome"=>"Higor", "idade"=> 10];
           
           echo "<pre>".  print_r($array)."</pre>";  
           echo "<pre>".  print_r($array,true)."</pre>";  
                    //O true vai remover o 1 no final do array 

           ?>
 
 <hr>  ##printf, sprintf - saida em uma variavel formatada  <br>
        
            <?php
         $msgFomr = "<article><h1>%s</h1><p>%s</p></article>";
            $title = "teste";     
            $body = "IDFIAUDFHAIUFADIUFHADIUFHADIFUHADFUI";

            printf($msgFomr, $title,$body);
            $result = printf($msgFomr, $title,$body);
            echo sprintf($msgFomr, $title,$body);
            echo  $result; //Tem um numero q aparece depois da string (tamanho da string)

           ?>
       <hr> vprintf,vsprintf - parecido com o anterior mais com array como variaveis <br>
        
            <?php
             $msgFomr2 = "<article><h3>Nome:%s</h3><h3>Idade:%s</h3></article>";
           echo vsprintf($msgFomr2, $array);
           ?>
           <hr>
        var_dump - Debug <br>
        <?php
        var_dump($array);

        ?>
       
    
    </header>
</body>
</html>