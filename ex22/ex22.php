<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstruturaCondicional</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $num1 = $_REQUEST['num1'] ?? 5;
        $num2 = $_REQUEST['num2'] ?? 10;
        $result = $num1 < $num2 ? $num1 : $num2
        ?>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="num1">digite um número: </label>
                <input type="text" name="num1" id="idnum2" value="<?=$num1?>">
                <label for="num2">digite outro número: </label>
                <input type="text" name="num2" id="idnum2" value="<?=$num2?>" >
                <input type="submit" value="mostrar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            print"$result"
            ?>
        </section>
    </main>
</body>
</html>