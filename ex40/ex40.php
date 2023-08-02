<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma_Valores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <main>
        <h1><strong>Soma Dos Valores</strong></h1>
        <section id="resultado">
            <?php 
            Function soma(){
                $a = func_get_args();
                $b = func_num_args();
                $s = 0;
                for($c = 0; $c < $b; $c ++){
                    $s += $a[$c];
                }
                return $s;
            }
            ?>
        </section>
        <section id="resultado">
            <?php 
            $y = soma(1, 2, 3, 4);
            print"o resultado da soma é $y"
            ?>
        </section>
    </main>
</body>
</html>