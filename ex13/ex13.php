<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<h1>divisão</h1>
<body>
    <?php 
    $dividendo = $_REQUEST['dividendo'] ?? 2;
    $divisor = $_REQUEST['divisor'] ?? 1;
    $resultado = intdiv($dividendo, $divisor) ?? 2;
    $sobra = $dividendo%$divisor ?? 1;
    ?>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">dividendo: </label>
            <input type="number" name="dividendo" id="iddividendo" value="<?=$dividendo?>">
            <label for="divisor">divisor: </label>
            <input type="number" name="divisor" id="iddivisor" value="<?=$divisor?>">
            <input type="submit" value="mostrar">
            </form>
        </section id= 'resultado'>
        <h2>resultado</h2>
        <?php 
        print"o dividendo é $dividendo"
        ?>
        <p></p>
        <?php 
        print"o divisor é $divisor"
        ?>
        <p></p>
        <?php 
        print"o resultado é $resultado"
        ?>
        <p></p>
        <?php 
        print"o resto é $sobra"
        ?>
        </section>
    </main>
</body>
</html>