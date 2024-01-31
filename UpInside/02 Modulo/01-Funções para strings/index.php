<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo -
        <?php
        $titulo = "01-Funções para string ";

        echo "$titulo";
        ?>
    </title>
</head>

<body>
    <header>
        <pre>
        <hr>## string e multibyte<br>

        <?php

        $string = "primeiro e último TESTE DE string";
        var_dump([
            "string" => $string,
            "strlen" => strlen($string), //Vai contar o N° de caracteres
            "mb_strlen" => mb_strlen($string), //Vai contar o N° de caracteres de forma certa
            "substr" => substr($string, "8"), // Retorna parte de uma string
            "mb_substr" => mb_substr($string, "8"), // Retorna parte de uma string

            "strtoupper" => strtoupper($string), //UPPERCASE
            "mb_strtoupper" => mb_strtoupper($string), //UPPERCASE MB
        ]);
        ?>

        <hr>## Conversão de caixa<br>
        <?php
        $mb_string = $string;
        var_dump([
            "CAIXA ALTA" => mb_strtoupper($mb_string),
            "CAIXA BAIXA" =>  mb_strtolower($mb_string),
            "CAIXA ALTA1" =>  mb_convert_case($mb_string, MB_CASE_UPPER),
            "CAIXA BAIXA1" =>  mb_convert_case($mb_string, MB_CASE_LOWER),
            "PRIMEIRA LETRA" =>  mb_convert_case($mb_string, MB_CASE_TITLE),
        ]);
        ?>
        <hr>## Substituição<br>
        <?php
        $repla_string = "Nova String de exemplo: 0.0.0.0";

        var_dump([
            "tamanho" => mb_strlen($repla_string), //tamanho
            "mb_strpos0" => mb_strpos($repla_string, '0'), //localização do caractere, se não existir manda false
            "mb_strpos1" => mb_strrpos($repla_string, '0'), //localização do caractere, se não existir manda false (segunda ocorrencia)
            "mb_substr" => mb_substr($repla_string, 24, 7), //Cortar pelo ponteiro = 24
            "mb_strstr" => mb_strstr($repla_string, ": "), //Cortar pelo string
            "mb_strstr" => mb_strstr($repla_string, ": ", true), //Cortar pelo string e pegar a parte da frente
            "mb_strstr" => mb_strrchr($repla_string, "0", true), //Cortar pelo ultima ocorrencia e pegar a parte da frente
            "mb_strstr" => mb_strrchr($repla_string, "."), //Cortar pelo ultima ocorrencia e pegar o final da string
        ]);

        $repla_string2 = "Nova String de exemplo: 0.1.2.3";

        var_dump([
            //Substituir na string
            "replace unico exemplo 1" => str_replace("0", "1", $repla_string),
            "replace unico" => str_replace("0", "1", $repla_string2),
            //POssivel erro nesse replace multiplo
            "replace vários" => str_replace(["0", "1", "2", "3"], ["192", "168", "0", "10"], $repla_string2),
        ]);
        ?>
        <hr>## Parse string<br>
        <?php


        $parse_string = "Nova String de exemplo: 0.0.0.0";

        var_dump([
            "tamanho" => mb_strlen($parse_string), //tamanho
            "mb_strpos0" => mb_strpos($parse_string, '0'), //localização do caractere, se não existir manda false
            "mb_strpos1" => mb_strrpos($parse_string, '0'), //localização do caractere, se não existir manda false (segunda ocorrencia)
            "mb_substr" => mb_substr($parse_string, 24, 7), //Cortar pelo ponteiro = 24
            "mb_strstr" => mb_strstr($parse_string, ": "), //Cortar pelo string
            "mb_strstr" => mb_strstr($parse_string, ": ", true), //Cortar pelo string e pegar a parte da frente
            "mb_strstr" => mb_strrchr($parse_string, "0", true), //Cortar pelo ultima ocorrencia e pegar a parte da frente
            "mb_strstr" => mb_strrchr($parse_string, "."), //Cortar pelo ultima ocorrencia e pegar o final da string
        ]);
        ?>
</pre>
    </header>
</body>

</html>