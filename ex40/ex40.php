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
                $funcGetArgs = func_get_args();
                $funcNumArgs = func_num_args();
                $contador = 0;
                for ($c = 0; $c < $funcNumArgs; $c ++) {
                    $contador += $funcGetArgs[$c];
                }
                return $contador;
            }
            ?>
        </section>
        <section id="resultado">
            <?php 
            $array = soma(1, 2, 3, 4);
            print"o resultado da soma é $array"
            ?>
        </section>
    </main>
</body>
</html>