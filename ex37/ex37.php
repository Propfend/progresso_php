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
        <center>
            <h1><strong>Números Primos</strong></h1>
        </center>
        <?php 
        $num = $_REQUEST['num'] ?? 5
        ?>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="num">digite um número</label>
                <input type="text" name="num" id="idnum" value="<?=$num?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            $num = $_REQUEST['num'];
            $p = 0;
            for($a = 2;$a < $num;$a++){
                if($num % $a == 0){
                    print"$num é divisivel por $a"."</br>";
                    $p += 1;
                }}
            if($p >= 1){
                print"o número $num não é primo";
            }
            else{
                print"o número $num é primo";
            }
                
            ?>
        </section>
        <center><strong><h2>você pegaria a sua prima?</h2></strong></center><center><img src="https://th.bing.com/th/id/OIP.wzl37J3tFT4DD55sCTjYXQHaE2?w=267&h=180&c=7&r=0&o=5&pid=1.7" alt=""></center>
    </main>
</body>
</html>