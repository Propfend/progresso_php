<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa_Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $dinero = $_REQUEST['dinero'] ?? 100;
    $cem = intdiv($dinero, 100);
    $restocem = $dinero%100;
    $cinquenta = intdiv($restocem, 50);
    $restocinquenta = $restocem%50;
    $dez = intdiv($restocinquenta, 10);
    $restodez = $restocinquenta%10;
    $cinco = intdiv($restodez, 5);
    ?>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="dinero">quanto dinheiro tens?:</label>
                <input type="number" name="dinero" id="iddinero" value="<?=$dinero?>">
                <input type="submit" value="mostrar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            print"notas de 100: $cem"
            ?>
            <p></p>
            <?php 
            print"notas de 50: $cinquenta"
            ?>
            <p></p>
            <?php 
            print"notas de 10: $dez"
            ?>
            <p></p>
            <?php 
            print"notas de 5: $cinco"
            ?>
        </section>
    </main>
</body>
</html>