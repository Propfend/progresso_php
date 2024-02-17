<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num = $_REQUEST['num'] ?? 5;
    ?>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="num">digite  um número: </label>
                <input type="text" name="num" id="idnum">
                <input type="submit" value="tabuada">
            </form>
        </section>
        <section>
            <?php 
            for ($p = 1;$p != 11;$p ++) {
                $numm = $num * $p;
                print"$num * $p = $numm"."</br>";
            }
            ?>
        </section>
    </main>
</body>
</html>