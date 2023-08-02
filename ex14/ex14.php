<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><strong>preencha</strong></h1>
    <?php 
    $salario = $_REQUEST['salario'] ?? 1320;
    $salarios = intdiv($salario, 1320);
    $sobra = $salario%1320;
    ?>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="salario">digite o seu salário: </label>
                <input type="text" name="salario" id="idsalario" value="<?= $salario ?>">
                <input type="submit" value="mostrar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            print"dentro de $salario temos $salarios salarios minimos e uma sobra de $sobra reais"
            ?>
        </section>
    </main>
</body>
</html>