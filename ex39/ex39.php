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
        $num1 = $_REQUEST['num1'] ?? 5;
        $num2 = $_REQUEST['num2'] ?? 6;
        ?>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">digite um número: </label>
            <input type="text" name="num1" id="idnum1">
            <label for="num2">digite outro número: </label>
            <input type="text" name="num2" id="idnum2">
            <input type="submit" value="somar">
        </form>
        </section>
        <section id="results">
        <?php 
        function soma($c, $d) {
            $e = $c + $d;
            return $e;
        }
        $somaResult = soma($num1, $num2);

        print"a soma entre $num1 e $num2 é $somaResult";
        ?>

        </section>
    </main>
</body>
</html>