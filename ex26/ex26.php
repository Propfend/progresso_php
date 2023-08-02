<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto&Dirigir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $nasc = $_REQUEST['nasc'] ?? 2000;
    $idade = 2023 - $nasc;
    if($idade >=18){
            $voto = 'sim';
            $dirige = 'sim';
    }
    else{
            $voto = 'não';
            $dirige = 'não';
            if ($idade >= 16) {
                $voto = 'opcional';
                $dirige = 'não';
            }
    }
    ?>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="nasc">digite o seu ano de nascimento: </label>
                <input type="text" name="nasc" id="idnasc" value="<?= $nasc?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section>
            <?php 
            print"pode votar: $voto"
            ?>
            <p></p>
            <?php 
            print"pode dirigir: $dirige"
            ?>
        </section>
    </main>
</body>
</html>