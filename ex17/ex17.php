<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><strong>DATA DE NASCIMENTO</strong></h1>
    <?php 
    $data = $_REQUEST['data'] ?? 2000;
    $idade = 2023 - $data;
    ?>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="data">qual o seu ano de nascimento?:</label>
                <input type="number" name="data" id="iddata" value="<?=$data?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
        <h2><strong>IDADE</strong></h2>
            <?php 
            print"você tem $idade anos"
            ?>
        </section>
    </main>
</body>
</html>