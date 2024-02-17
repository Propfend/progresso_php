<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sucessor e antecessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<h1>sucessor e antecessor</h1>
    <?php 
        $numero = $_REQUEST['numero'];
        $sucessor = $_REQUEST['numero'] + 1;
        $antecessor = $_REQUEST['numero'] - 1;
        print"número escolhido: $numero";
        ?>
    <p></p>
    <?php
        print"seu sucessor: $sucessor";
    ?>
    <p></p>
    <?php
        print"seu antecessor: $antecessor"
         ?>
<body>
</body>
</html>