<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Do_While</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1><strong>contando de 1 a 10</strong></h1>
    <main>
        <section>
            <?php 
            $a = 1;
            do{
                print"$a"."</br>";
                $a += 2;

            }while($a != 11)
            ?>
        </section>
    </main>
</body>
</html>