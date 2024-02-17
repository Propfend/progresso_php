<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
</head>
<body>
   <header>
    <h1>output</h1>
    <header>
        <main>
            <?php   
            $nome = $_REQUEST["nome"];
            $idade = $_REQUEST["idade"];
            print"olá,<strong>$nome</strong>"
            ?>
            <p></p>
            <?php 
            print"você tem <strong>$idade</strong> anos"
            ?>
        <main>
</body>
</html>