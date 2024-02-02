<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo -
        <?php
        $titulo = "05-Classe DateTime";

        echo "$titulo";
        ?>
    </title>
</head>

<body>
    <header>
        <hr> ## Class DataTime - Manipular<br>
        <?php

        define("DATE_BR", "d/m/y h:i:s");


        date_default_timezone_set('America/Sao_Paulo');
        $dateNow = new DateTime();
        //Forma de pegar data expecifica
        $dateBirth = new DateTime("2001-06-23"); //data de aniversario - tem q escrever no padrão deles
        $dateBirth2 = DateTime::createFromFormat(DATE_BR, "23/06/2001 h:i:s");
        $dateBirth2 = DateTime::createFromFormat("d/m/Y", "23/06/2001");


        print_r([
            $dateNow,
            $dateNow->format(DATE_BR),
            "DIA" => $dateNow->format("d"),

        ]);

        echo "<br>";
        echo "<br>";
        echo " sdasdas";
        print_r([$dateBirth]);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        print_r([$dateBirth2]);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        //ver os metodos
        print_r([
            get_class_methods($dateNow)
        ]);

        ?>
        <hr> ## A classe DateInterval - intervalo<br>
        <?php

        $dateInterval = new DateInterval("P10Y2MT10M");
        $dateTime = new DateTime("now");
        $dateTime->sub($dateInterval);
        var_dump($dateTime);


        //diff  => diferença entre datas
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $dataResouces = new DateTime("now");
        var_dump([
            $dataResouces->format(DATE_BR),
            $dataResouces->sub(DateInterval::createFromDateString("10days"))->format(DATE_BR),
        ]);


        ?>
        <hr> ## A classe DatePeriod - periodo de data <br>
        <?php
        $start = new DateTime('now');
        $inteval = new DateInterval("P6M"); //De 3 em 3 meses
        $end = new DateTime('2025-06-01');

        $pedior = new DatePeriod($start, $inteval, $end);

        var_dump([
            $start->format(DATE_BR),
            $inteval,
            $end->format(DATE_BR),

        ]);

        echo "<br>";
        echo "<br>";
        echo "<br>";
        // var_dump([
        //     $pedior,
        //     get_class_methods($pedior)
        // ]);
        echo "<h3> Meses entre as datas: (pode ser usado em uma sistema de assinatura) </h3>";
        foreach ($pedior as $m) {
            echo "<p> - {$m->format(DATE_BR)}</p>";
        }
        ?>

    </header>
</body>

</html>