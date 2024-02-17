<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números_Primos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
            <div style="text-align: center;">
                <h1><strong>Números Primos</strong></h1>
            </div>
        <?php 
        $num1 = $_REQUEST['num1'] ?? 5
        ?>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="num1">digite um número</label>
                <input type="text" name="num1" value="<?=$num?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            $num1 = $_REQUEST['num1'];
            $contador = 0;

            for ($divisor = 2; $divisor < $num; $divisor++) {
                if ($num % $divisor == 0) {
                    print"$num é divisivel por $divisor"."</br>";
                    $contador += 1;
                }
            } 

            if ($p >= 1) {
                print"o número $num não é primo";
            } else {
                print"o número $num é primo";
            }
                
            ?>
        </section>
    </main>
</body>
</html>