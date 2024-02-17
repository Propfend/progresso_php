<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing_BuiltIn_Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="frase">digite uma frase: </label>
            <input type="text" name="frase" id="idfrase">
            <input type="submit" value="mostrar">
        </form>
    </section>
    <section id="resultado">
        <?php
         
            $frase = $_REQUEST['frase'] ?? 'eu amo chupar buceta';

            $maiusculo = strtoupper($frase);

            $minusculo = strtolower($frase);

            $inverso = strrev($frase);

            $ucwords = ucwords($frase);

            $first = ucwords(strtolower($frase));

            $eu = stripos($frase, "eu");

            $sub = substr($frase, -3);

            print"frase: "."<br/>"."<br/>";

            print"$frase"."<br/>"."<br/>";

            print"maiúsculo: "."<br/>"."<br/>";

            print"$maiusculo"."<br/>"."<br/>";

            print"minúsculo: "."<br/>"."<br/>";

            print"$minusculo"."<br/>"."<br/>";

            print"inverso: "."<br/>"."<br/>";

            print"$inverso"."<br/>"."<br/>";

            print"primeira maiúscula: "."<br/>"."<br/>";

            print"$ucwords"."<br/>"."<br/>";

            print"apenas as primeiras maiúsculas: "."<br/>"."<br/>";

            print"$first"."<br/>"."<br/>";

            print"a palavra 'eu' aparece na posição: "."<br/>"."<br/>";

            print"$eu"."<br/>"."<br/>";

            print"ultimas 3 letras: "."<br/>"."<br/>";

            print"$sub"

        ?>
    </section>
    </main>
</body>
</html>