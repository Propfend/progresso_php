<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluindo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section id="resultado">
            <?php 
                include "papa.php";
                $a = dizerQueAmaBuceta();
                $b = fuder();
                print"$a";
            ?>
            <?php 
            print"$b";
            ?>
        </section>
    </main>
</body>
</html>