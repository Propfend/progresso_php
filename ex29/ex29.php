<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num = $_REQUEST['num'] ?? 2;
    ?>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="num">digite o dia da semana: (2-7)</label>
                <input type="text" name="num" id="idnum" value="<?= $num?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            switch ($num >= 2 and $num < 6 ){
                case 1:
                print"deves ir para a aula,papae.";
                
            } switch($num == 6 or $num == 7) {
                case 2:
                    print"não deves ir para a aula,papae.";

            } switch($num <= 1 or $num >=8){
                case 3:
                    print"digite o número certo,seu cabaço.";
            }
            ?>
        </section>
    </main>
</body>
</html>