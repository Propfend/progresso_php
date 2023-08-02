<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
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
                <input type="text" name="num" id="idnum">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            $p = 0;
            $num = $_REQUEST['num'] ?? 5;
            do{
                $p ++;
                $numm = ($num * $p);
                print"$num X $p = $numm "."</br>";
            }while($p != 10)
            ?>
        </section>
    </main>
</body>
</html>