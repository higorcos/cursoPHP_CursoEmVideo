<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo -
        <?php
        $titulo = "01-Funções para ";

        echo "$titulo";
        ?>
    </title>
</head>

<body>
    <header>



        <hr>## Manipulação<br>
        <?php
        $arrProfile = [
            "name" => "Higor",
            "empresa" => "HP",
            "email" => "higor.com.br",
        ];

        //transformar em objeto 
        $objProfile = (object)$arrProfile;
        echo "<p>{$arrProfile["name"]} trabalha na {$arrProfile["empresa"]}";
        echo "<p>{$objProfile->name} trabalha na {$objProfile->empresa}";

        // remover
        unset($objProfile->email);
        print_r($objProfile);

        ?>

        <pre>
        <hr>## Class<br>
        <?php
        $company = new stdClass();
        $company->company = "Hp2";
        $company->ceo = "dr.higor";
        $company->maneger = new stdClass();
        $company->maneger->name = "higor estagiario";
        $company->maneger->email = "estagio.higor.com";


        print_r($company);

        ?>

<hr>## Análise<br>
<?php

$date = new DateTime();
var_dump(
    [
        "class" => get_class($date), //QUal a class
        "methods" => get_class_methods($date),
        "variaveis" => get_object_vars($date),
        "parent" => get_parent_class($date),
        "subClass" => is_subclass_of($date, "DateTime"), //VERIFICAR SE É FILHA


    ]
)
?>



</pre>

    </header>
</body>

</html>