<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculaRaíz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero = $_REQUEST['numero'] ?? 4;
    $raiz = sqrt($numero)
    ?>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="nuemro">digite um número</label>
                <input type="text" name="numero" id="idnumero" value="<?=$numero?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <?php
            print"a raiz de $numero é $raiz"
            ?>
        </section>
    </main>
</body>
</html>