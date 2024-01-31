<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo -
        <?php
        $titulo = "01-Funções para Array";

        echo "$titulo";
        ?>
    </title>
</head>

<body>
    <header>
        <pre>

        <hr>## string e multibyte<br>

            <?php

            $index = [
                "AC/DC",
                "Nirvana",
                "Alter Bridge",
            ];
            $assoc = [
                "band_1" => "AC/DC",
                "band_2" => "Nirvana",
                "band_3" => "Alter Bridge",
            ];
            //Adionar ao começo
            array_unshift($index, "CHORÃO 00", "CHORÃO 01", "");
            $assoc = ["band_0" => "CHORÃO 00", "band_1" => "CHORÃO 01",] + $assoc;
            //Adionar ao final
            array_push($index, "CHORÃO 02");
            $assoc = $assoc + ["band_4" => "CHORÃO"];


            //Remover o primeiro (para os dois tipo de array)
            //===array_shift()
            //remover o ultimo 
            //===array_pop()

            var_dump([
                $index,
                $assoc
            ]);

            //filtro de valores (para os dois tipo de array)
            array_unshift($index, ""); //limpar
            $index = array_filter($index); //filtrar


            var_dump([
                $index,
                // $assoc
            ]);


            $base = array("laranja", "banana", "maçã", "framboesa");
            $substituicoes = array(0 => "abacaxi", 4 => "cereja");
            $substituicoes2 = array(0 => "uva");

            $cesta = array_replace($base, $substituicoes, $substituicoes2);
            print_r($cesta);
            ?>


<hr>## Ordenação<br>
        <?php
        //(para os dois tipo de array)
        $cesta = array_reverse($cesta); //reveter
        asort($cesta); //Alfabeto
        print_r($index);

        //Ordenar pelo id
        sort($index);
        //ordem inversa do id
        rsort($index);


        print_r($cesta);
        print_r($index);


        //Novo array apenas com as keys e itens

        array_keys($assoc);
        array_values($assoc);

        // verificar se existe correspodente em uma array

        if (in_array("CHORÃO", $assoc)) {
            echo (" <hr>## Verificação<br>-------------É");
        }

        //separa por virgula todos os itens de um array 
        $resultimplode = implode(", ", $assoc);
        //Juntas por virgula todos os itens de um array 
        $resultexplode = explode(", ", $resultimplode);


        ?>



</pre>
    </header>
</body>

</html>