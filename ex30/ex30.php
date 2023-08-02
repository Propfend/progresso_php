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
                $t = 1;
                while($t != 11){
                    print"$t"."</br>";
                    $t += 1;
                }
            ?>
        </section>
    </main>
</body>
</html>