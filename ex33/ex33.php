<!DOCTYPE html>
<html lang="ept-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $num = $_REQUEST['num'] ?? 5; 
        ?>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="num">digite um número: </label>
                <input type="text" name="num" id="idnum" value="<?= $num?>">
                <input type="submit" value="enviar">
            </form>
        </section>
    <h1><strong>Fatorial</strong></h1>
        <section id="result">
            <?php 
            $a = $_REQUEST['num'];
            $b = $a;
            do {     
                $b --;
                $a = ($a * $b);

            } while($b != 1);
            print"$a"
            ?>
        </section>
    </main>
</body>
</html>