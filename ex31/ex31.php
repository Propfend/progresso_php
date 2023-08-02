<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num1 = $_REQUEST['num1'] ?? 10;
    $num2 = $_REQUEST['num2'] ?? 20;
    $passagem = $_REQUEST['passagem'] ?? 2;
    ?>
    <main>
        <section>
            <form action="" method="get">
                <label for="num1">digite um número: </label>
                <input type="text" name="num1" id="idnum1" value="<?=$num1?>">
                <label for="num2">digite outro: </label>
                <input type="text" name="num2" id="idnum2" value="<?=$num2?>">
                <label for="passagem">digite o valor do(s) intervalo(s)</label>
                <input type="text" name="passagem" id="idpassagem" value="<?=$passagem?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultat">
            <?php 
            if($passagem == 0){
                print"Infinity Sequence";

            }
            else{
                while($num1 < $num2 or $num1 + $passagem > $num2){
                    print"$num1"."</br>";
                    $num1 += $passagem;
                    if($num1 == $num2){
                        print"$num1";
                    break;}
                    if($num2 < $num1 + $passagem){
                        print"$num1";
                    break;
                    }
                    }}
            ?>
        </section>
    </main>
</body>
</html>