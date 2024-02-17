<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>soma dos números</h1>
    <main>
        <?php 
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];
        $num3 = $_REQUEST['num1'] + $_REQUEST['num2'];
        print"$num1 + $num2 = $num3"
        ?>
        <button onclick="javascript:window.location.href ='ex12.html'">voltar</button>
</body>
</html>