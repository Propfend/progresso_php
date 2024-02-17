<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma_Multiplica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num1 = $_REQUEST['num1'] ?? 10;
    $num2 = $_REQUEST['num2'] ?? 5;
    $escolha = $_REQUEST['escolha'] ?? 'multiplicar';
    $resultado = ($escolha == 'multiplicar') ? $num1 * $num2 : $num1 + $num2
    ?>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="num1">digite um número: </label>
                <input type="text" name="num1" id="idnum1" value="<?=$num1?>">
                <label for="num2">digite outro: </label>
                <input type="text" name="num2" id="idnum2" value="<?=$num2?>">
                <label for="escolha">quer somar ou multiplicar?</label>
                <input type="text" name="escolha" id="idescolha" value="<?=$escolha?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section>
            <?php 
            print"resultado: $resultado"
            ?>
        </section>
    </main>
</body>
</html>