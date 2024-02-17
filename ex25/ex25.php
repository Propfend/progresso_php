<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleitor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $nasc = $_REQUEST['nasc'] ?? 2000;
    $idade = 2023 - $nasc ;
    $voto = ($idade >= 18 and $idade < 65) ? 'obrigatório' : 'não obrigatório'
    ?>
    <main>
        <section>
            <form action="" method="get">
                <label for="nasc">digite o seu ano de nascimento: </label>
                <input type="text" name="nasc" id="idnasc" value="<?=$nasc?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            print"voto: $voto"
            ?>
        </section>
    </main>
</body>
</html>