<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma_Nums</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $a = $_REQUEST['a'] ?? 2;
        $b = $_REQUEST['b'] ?? 3;
        ?>
        <section>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
                <label for="a">digite um número: </label>
                <input type="text" name="a" id="ida">
                <label for="b">digite outro: </label>
                <input type="text" name="b" id="idb">
                <input type="submit" value="somar">
            </form>
        </section>
        <section id="results">
            <?php 
            function soma($c, $d){
                $e = $c + $d;
                print"$e";
            }
            print"a soma entre $a e $b é: ";
            soma($a, $b);
            ?>
        </section>
    </main>
</body>
</html>