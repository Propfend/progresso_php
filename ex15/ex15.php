<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raiz cubica e quadrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1><strong>aritmetica</strong></h1>
    <?php 
    $numero = $_REQUEST['numero'] ?? 64;
    $raiz = sqrt($numero) ?? 8;
    $cubo = pow($numero, 1/3) ?? 4;
    ?>
    <section>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="numero">digite um número: </label>
            <input type="text" name="numero" id="idnumero" value="<?=$numero?>">
            <input type="submit" value="mostrar">
        </form>
    </section>
    <section id="resultado">
        <h2><strong>resultado</strong></h2>
        <?php 
        print"a raíz quadrada de $numero é $raiz"
        ?>
        <p></p>
        <?php 
        print"a raíz cúbica de $numero é $cubo"
        ?>
    </section>
</main>
</body>
</html>