<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor1 = $_REQUEST['valor1'] ?? 10;
    $valor2 = $_REQUEST['valor2'] ?? 10;
    $peso1 = $_REQUEST['peso1'] ?? 1;
    $peso2 = $_REQUEST['peso2'] ?? 1;
    $media = (($valor1 + $valor2)/2) ?? 0;
    $ponderada = (($valor1*$peso1 + $valor2*$peso2)/($peso1 + $peso2)) ?? 0;
    ?>
    <main>
        <h1>valores</h1>
        <section>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="valor1">valor 1:</label>
                <input type="text" name="valor1" id="idvalor1" value="<?=$valor1 ?>">
                <label for="peso1">peso 1:</label>
                <input type="text" name="peso1" id="idpeso1" value="<?=$peso1 ?>">
                <label for="valor2">valor 2:</label>
                <input type="text" name="valor2" id="idvalor2" value="<?=$valor2 ?>">
                <label for="peso2">peso 2:</label>
                <input type="text" name="peso2" id="idpeso2" value="<?=$peso2 ?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <h2>resultado</h2>
            <?php 
            print"a média aritmética simples entre $valor1 e $valor2 é igual a $media "
            ?>
            <p></p>
            <?php 
            print"a média aritmética ponderada entre $valor1 e $valor2 com peso $peso1 e $peso2 é igual a $ponderada"?>
        </section>
    </main>
</body>
</html>