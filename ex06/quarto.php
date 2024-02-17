<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>
    resultados
</h1>
<body>
<?php 
    $numero = $_REQUEST["raiz"];
    $raiz = sqrt($_REQUEST["raiz"]);
    $numero2 = $_REQUEST["abs"];
    $abs = abs($_REQUEST["abs"]);
    $numero3 = $_REQUEST["potencia"];
    $potencia = pow($_REQUEST["potencia"], 2);
    
    print"a raiz de <strong>$numero</strong> é <strong>$raiz</strong>"."<br/>"."<br/>"

    print"o módulo de <strong>$numero2</strong> é <strong>$abs</strong>"."<br/>"."<br/>"

    print "<strong>$numero3</strong> elevado a 2 é igual a <strong>$potencia</strong>"."<br/>"."<br/>"
    ?>
</body>
</html>