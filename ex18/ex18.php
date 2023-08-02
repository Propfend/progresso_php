<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento_Salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $salario = $_REQUEST['salario'] ?? 1320;
    $porcentagem = $_REQUEST['porcentagem'] ?? 5;
    $neosalario = $salario + (($salario * $porcentagem)/100)
    ?>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">qual o seu salário?: </label>
            <input type="number" name="salario" id="idsalario" value="<?=$salario?>"
            <label for="porcentagem">quantos % quer de aumento?: </label>
            <input type="number" name="porcentagem" id="idporcentagem" value="<?=$porcentagem?>">
            <input type="submit" value="enviar">
            </form>
        </section>
        <section>
            <?php
            print"com um aumento de $porcentagem%,o seu antigo salario de $salario vai para $neosalario"
            ?>
        </section>
    </main>
</body>
</html>