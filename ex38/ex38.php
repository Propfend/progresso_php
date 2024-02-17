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
        $num1 = $_REQUEST['a'] ?? 2;
        $num2 = $_REQUEST['b'] ?? 3;
        ?>
        <section>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
                <label for="num1">digite um número: </label>
                <input type="text" name="num1" >
                <label for="num2">digite outro: </label>
                <input type="text" name="num2" >
                <input type="submit" value="somar">
            </form>
        </section>
        <section id="results">
            <?php 
            function soma($num1, $num2){
                $somaResult = $num1 + $num2;
                return $somaResult;
            }
            
            print"a soma entre $num1 e $num2 é: ";
            soma($num1, $num2);
            ?>
        </section>
    </main>
</body>
</html>