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
                foreach($y as $r){
                    print"$r"."<br/>";
                }
            print"usando UnSet para remover o índice '1'"."<br/>";
            unset($y[1]);
            foreach($y as $t){
            print"$t"."<br/>";
            }
            print"usando associações Strings: "."<br/>";
            $info = array("nome" => "miguel",
            "idade" => 15,
            "ama" => "fuder");
            foreach($info as $u => $a){
                print"$u: $a"."<br/>";
            }
            print"Matrizes: "."<br/>";
            $buceta = array(array(1, 2), array(3, 4), array(4, 5));
            foreach($buceta as $w){
                print_r($w);
            }
            ?>
            <h1>manipulando Matrizes e Vetores</h1>
            <?php 
            $u = array(1, 2);
            print"-Print_r(): "."<br/>";
            print""."<br/>";
            print_r($u)."<br/>";
            print""."<br/>";
            print""."<br/>";
            print"-Var_Dump(): "."<br/>";
            print""."<br/>";
            var_dump($u)."<br/>";
            print""."<br/>";
            print""."<br/>";
            print"-usando Array_Push: "."<br/>";
            print""."<br/>";
            array_push($u, 6);
            print_r($u);
            print""."<br/>";
            print""."<br/>";
            print"-usando Array_Pop: "."<br/>";
            print""."<br/>";
            array_pop($u);
            print_r($u);
            print""."<br/>";
            print""."<br/>";
            print"-eliminando e adicionando primeiro item com Array_Shift e Array_Unshift: "."<br/>";
            print""."<br/>";
            array_shift($u);
            print_r($u);
            print""."<br/>";
            print""."<br/>";
            array_unshift($u, 8);
            print_r($u);
            print""."<br/>";
            print""."<br/>";
            print"usando Sort: "."<br/>";
            print""."<br/>";
            sort($u);
            print_r($u);
            print""."<br/>";
            print""."<br/>";
            print"usando rSort: "."<br/>";
            print""."<br/>";
            rsort($u);
            print_r($u);
            print""."<br/>";
            print""."<br/>";
            print"usando aSort: "."<br/>";
            print""."<br/>";
            asort($u);
            print_r($u);
            print""."<br/>";
            print""."<br/>";
            print"usando arSort: "."<br/>";
            print""."<br/>";
            arsort($u);
            print_r($u);
            print""."<br/>";
            print""."<br/>";
            print"usando kSort: "."<br/>";
            print""."<br/>";
            ksort($u);
            print_r($u);
            print""."<br/>";
            print""."<br/>";
            ?>

        </main>
    </body>
    </html>