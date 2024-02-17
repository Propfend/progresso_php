    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>

            <h1>Criando Arrays</h1>

            <?php 

            print"suando ForEach: "."<br/>";

                $p = array(1, 2, 3, 4);

                foreach($p as $c){
                    print"$c"."<br/>";
                }

            print"usando Range: "."<br/>";

                $y = range(0, 20, 5);

            foreach ($y as $r) {
                print"$r"."<br/>";
            }

            print"usando UnSet para remover o índice '1'"."<br/>";

            unset($y[1]);

            foreach ($y as $t) {

                print"$t"."<br/>";

            }
            print"usando associações Strings: "."<br/>";

            $info = array("nome" => "miguel",

            "idade" => 15,

            "ama" => "fuder");

            foreach ($info as $u => $a) {
                print"$u: $a"."<br/>";
            }

            print"Matrizes: "."<br/>";

            $array_nums = array(array(1, 2), array(3, 4), array(4, 5));

            foreach ($array_nums as $w) {
                print_r($w);
            }
            print("<h1>manipulando Matrizes e Vetores</h1>");

            $array = array(1, 2);

            print_r($array)."<br/>"."<br/>";

            print"-Var_Dump(): "."<br/>"."<br/>";

            var_dump($array)."<br/>"."<br/>";

            print"-usando Array_Push: "."<br/>"."<br/>";

            array_push($array, 6)."<br/>"."<br/>";

            print_r($array)."<br/>"."<br/>";

            print"-usando Array_Pop: "."<br/>"."<br/>";

            array_pop($array)."<br/>"."<br/>";

            print_r($array)."<br/>"."<br/>";

            print"-eliminando e adicionando primeiro item com Array_Shift e Array_Unshift: "."<br/>"."<br/>";

            array_shift($array)."<br/>"."<br/>";

            print_r($array)."<br/>"."<br/>";

            array_unshift($array, 8)."<br/>"."<br/>";

            print_r($array);

            print"usando Sort: "."<br/>";

            sort($array)."<br/>"."<br/>";

            print_r($array)."<br/>"."<br/>";

            print"usando rSort: "."<br/>";

            rsort($array)."<br/>"."<br/>";

            print_r($array)."<br/>"."<br/>";

            print"usando aSort: "."<br/>"."<br/>";

            asort($array)."<br/>"."<br/>";

            print_r($array)."<br/>"."<br/>";

            print"usando arSort: "."<br/>"."<br/>";

            arsort($array)."<br/>"."<br/>";

            print_r($array)."<br/>"."<br/>";

            print"usando kSort: "."<br/>"."<br/>";

            ksort($array)."<br/>"."<br/>";

            print_r($array)."<br/>"."<br/>";
            ?>

        </main>
    </body>
    </html>