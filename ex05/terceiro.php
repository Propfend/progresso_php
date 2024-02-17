<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tente novamente</title>
</head>
<body>
    <main>
    <?php 
    $nome = $_REQUEST["nome"];
    $idade = $_REQUEST["idade"];
    print"eu odeio, <strong>$nome</strong>!!!";
    ?>
    <p></p>
    <?php 
        print"você tem <strong>$idade</strong> anos";
    ?>
    <main>
</body>
</html>