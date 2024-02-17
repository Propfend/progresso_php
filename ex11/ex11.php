<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisa_Num</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
        $numint = intval($_REQUEST['numero']);
        $numfra = number_format($_REQUEST['numero'] - $numint, 3);
        print"parte inteira do número: $numint"
        ?>
        <p></p>
        <?php 
        print"a parte fracionária do número: $numfra"
        ?>
        <button onclick="javascript:window.location.href='ex11.html'">voltar</button>
    </main>
</body>
</html>