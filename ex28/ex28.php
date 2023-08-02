<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cubo_Soma_Dobro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num = $_REQUEST['num'] ?? 4;
    $option = $_REQUEST['option'] ?? 'dobro'; 
    $ranum = sqrt($num);
    $dobronum = $num * 2;
    $cunum = $num ** 3;
    ?>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
                <label for="num">digite um número: </label>
                <input type="text" name="num" id="idnum" value="<?= $num?>">
                <label for="option">(raíz/cubo/dobro)?: </label>
                <input type="text" name="option" id="idoption" value="<?= $option?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            switch($option == 'cubo'){
                case 1:
                    print"o cubo de $num é $cunum";
            }
            switch($option == 'dobro'){
                case 2:
                    print"o dobro de $num é $dobronum";
            }
            switch($option == 'raíz'){
                case 3:
                    print"a raíz de $num é $ranum";
            }
            ?>
        </section>
    </main>
</body>
</html>