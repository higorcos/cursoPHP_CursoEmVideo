<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo -
        <?php
        $titulo = "06_Array,vetores e pilha";

        echo "$titulo";
        ?>
    </title>
</head>

<body>
    <header>



        <hr> ##Array normal<br>


        <?php
        $array = [1, 2, 3];
        echo "<pre>";
        var_dump($array);
        echo "<pre>";

        ?>

        <hr> ## Array associativo<br>


        <?php
        $arrayS = [
            "0000" => "HIgor",
            "0001" => "Pinheiro",
            "0002" => "Costa",
        ];
        $arrayS["0000"] = "Higor";
        $arrayS["year"] = "22";

        echo "<pre>";
        var_dump($arrayS);
        echo "</pre>";

        ?>



    </header>
</body>

</html>