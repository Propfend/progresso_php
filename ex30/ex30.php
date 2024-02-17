<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1_Até_10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section id="results">
            <?php 
                $contador = 1;
                while ($contador != 11) {
                    print"$contador"."</br>";
                    $contador += 1;
                }
                print('dez!')
            ?>
        </section>
    </main>
</body>
</html>