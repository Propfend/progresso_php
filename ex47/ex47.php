<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
        $a = 'eu amo fuder';
        print"a frase original: $a"."<br/>"."<br/>";
        print"a frase sem espaços nas laterais: ".trim($a);
        ?>
    </main>
</body>
</html>