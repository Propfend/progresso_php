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
    <?php 
    $frase = $_REQUEST['frase'] ?? 'eu amo chupar buceta';
    ?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="frase">digite uma frase: </label>
            <input type="text" name="frase" id="idfrase">
            <input type="submit" value="mostrar">
        </form>
    </section>
    <section id="resultado">
        <?php 
        $maiúsculo = strtoupper($frase);
        $minúsculo = strtolower($frase);
        $inverso = strrev($frase);
        $ucwords = ucwords($frase);
        $first = ucwords(strtolower($frase));
        $eu = stripos($frase, "eu");
        $sub = substr($frase, -3);
        print"frase: "."<br/>";
        print"$frase"."<br/>";
        print"maiúsculo: "."<br/>";
        print"$maiúsculo"."<br/>";
        print"minúsculo: "."<br/>";
        print"$minúsculo"."<br/>";
        print"inverso: "."<br/>";
        print"$inverso"."<br/>";
        print"primeira maiúscula: "."<br/>";
        print"$ucwords"."<br/>";
        print"apenas as primeiras maiúsculas: "."<br/>";
        print"$first"."<br/>";
        print"a palavra 'eu' aparece na posição: "."<br/>";
        print"$eu"."<br/>";
        print"ultimas 3 letras: "."<br/>";
        print"$sub"
        ?>
    </section>
    </main>
</body>
</html>