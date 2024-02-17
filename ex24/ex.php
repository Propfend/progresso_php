<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $nota = $_REQUEST['nota'] ?? 7; 
    $situação = $nota >= 7 ? 'aprovado' : 'reprovado'
    ?>
    <Main>
        <section>
            <form action="" method="get">
                <label for="nota">digite a sua nota: </label>
                <input type="text" name="nota" id="idnota" value="<?= $nota ?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <?php
            print"a sua situação é: $situação"
            ?>
        </section>
    </main>
</body>
</html>