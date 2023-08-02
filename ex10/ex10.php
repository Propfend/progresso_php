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
        <?php 
        $dólares = number_format($_REQUEST['moedas']/4.92, 2);
        print"você tem $dólares dólares"
        ?>
        <p></p>
        <?php
        print"*cotação fixa de 5.92R$/Dólar"
        ?>
        <button onclick="javascript:window.location.href='ex10.html'">voltar</button>
    </main>
</body>
</html>