<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ultils/style.css">
    <title>Exemplo -
        <?php
        $titulo = "06-Manipulação de Arquivos e diretorios";

        echo "$titulo";
        ?>
    </title>
</head>

<body>
    <header>
        <pre>

        <hr>## Verificação<br>
        <?php
        $file = __DIR__ . "/file.txt";

        //Se existe o diretorio e se existe é uma arquivo
        if (file_exists($file) && is_file($file)) {
            echo ("<p>Existe !!</p>");
        } else {
            echo ("<p>Não existe !!</p>");
        }

        ?>
        <hr>## Leitura e gravação<br>
        <?php
        //se não existir o diretorio ou se não existir o arquivo
        if (!file_exists($file) || !is_file($file)) {
            $fileOpen = fopen($file, "w"); //criar
            //escrever no arquivo
            fwrite($fileOpen, "TITULO" . PHP_EOL);
            fwrite($fileOpen, "NOME" . PHP_EOL);
            fwrite($fileOpen, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, nam sunt cum voluptas maxime nulla ducimus quod repellat tenetur libero a officia blanditiis est at vero, vel illum pariatur voluptatibus." . PHP_EOL);
            //fechar
            fclose($fileOpen);

            echo ("<p>Aquivo criado !!</p>");
        } else {
            // echo ("<p>Mostrar dados do arquivo</p>");
            // var_dump([
            //     file($file),
            //     pathinfo($file),
            // ]);
        }
        //ler arquivo;
        $open = fopen($file, 'r');

        echo ("<p>Pecorrer o arquivo</p>");

        while (!feof($open)) { //enquanto não chegar na ultima linha
            echo "<p>" . fgets($open) . "</p>";
        }

        ?>
        <hr>## Get, puy content<br>
        -getContents
        -file_put_contents
        -file_get_contents

        <hr>## Diretorio<br>
        - mkdir => criar pasta
        - scandir => ler e verificar quantos arquivos
        - copy/basename
        - rename (é possivel mover com o rename)
        - rmdir -apagar Diretorio (Verificar se está vazio)
        - count - contar quantos arquivos tem 
        - unlink - apagar arquivo

        </pre>
    </header>
</body>

</html>