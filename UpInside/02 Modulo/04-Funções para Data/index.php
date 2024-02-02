<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo -
        <?php
        $titulo = "01-Funções para Data";

        echo "$titulo";
        ?>
    </title>
</head>

<body>
    <header>
        <hr> ## Funções de data<br>
        <pre>

        <?php
        print_r([
            date_default_timezone_set('America/Sao_Paulo'),
            date_default_timezone_get(),
            date(DATE_W3C),
            date("d/m/Y h:i:s"),
        ]);

        define("DATE_BR", "d/m/y h:i:s");
        define("DATE_TIMEZONE", "Indian/Christmas");
        // define("DATE_TIMEZONE", "America/Sao_Paulo");

        date_default_timezone_set(DATE_TIMEZONE);

        print_r([
            date_default_timezone_get(),
            date(DATE_BR),
        ]);

        #OUtra forma de acessar a data
        $teste = '0';
        print_r([getdate()]);
        echo "Segundos " . getdate()["seconds"];
        ?>
        </pre>


        <hr> ## String to data<br>
        <pre>
            <?php
            var_dump([
                "strtotime_NOW" => strtotime("now"),
                "time" => time(),
                "strtotime + 10 dias" => strtotime("+10days"),
                "date" => date(DATE_BR),
                "date + 10 dias" => date(DATE_BR, strtotime("+10days")), //date mais 10 dias
                "date - 10 dias" => date(DATE_BR, strtotime("-10days")), //date mais 10 dias

            ]);
            $format = "%d do %m de %y";

            echo "a data é ", strftime($format);
            ?>



        </pre>



    </header>
</body>

</html>