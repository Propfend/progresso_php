<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma_Com_Dois</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><strong>Soma_Com_Dois
    </strong></h1>
    <?php 
    $num = $_REQUEST['num'] ?? 5;
    ?>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="num">digite um número</label>
                <input type="text" name="num" id="dinum" value="<?=$num?>">
                <input type="submit" value="enviar">
                <?php 
                function Soma_Dois($x){
                    $y = $x +2;
                    return"a soma de $x com 2 é $y";
                }
                ?>
            </form>
        </section>
        <section id="resultado">
                <?php 
                $v = Soma_Dois($num);
                print"$v"
                ?>
        </section>
    </main>
</body>
</html>