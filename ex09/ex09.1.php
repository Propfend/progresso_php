<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>gerando número aleatório
    </h1>
    <?php 
    $numaleatorio = rand(1, 100);
    $nome = $_REQUEST['nome'];
    print"aqui está o seu número, $nome";
    ?>
    <p></p>
    <?php
    print"$numaleatorio"
    ?>
    <button onclick="javascript:document.location.reload()">outro</button>
    <button onclick="javascript:window.location.href='aha.html'">voltar</button>
    </main>
</body>
</html>