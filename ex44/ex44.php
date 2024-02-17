<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando_BuiltIn_Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $t = 0
        ?>
        <section>
        <?php 
        $b = strlen(trim("   eu amo chupar buceta   "));
        
        print"a string 'eu amo chupar buceta' tem $b letras(contando espaços)"."<br/>";

        $words = str_word_count("eu amo chupar buceta");

        $wordss = str_word_count("eu amo chupar buceta", 1);

        print"a frase 'eu amo chupar buceta' tem $words palavras"."<br/>";

        print"a frase 'eu amo chupar buceta' tem array como :"."<br/>";

        // print_r($wordss)."<br/>";
        for($i = 0; $i != $words;$i ++){
            $t += 1;
            print"palavra $t: "."<br/>";
            print"$wordss[$i]"."<br/>";
        }

        $ar = str_split("eu amo chupar buceta");

        print_r($ar);

        $k = 0;

        for ($inicio = 0; $inicio != 20; $inicio ++) {
            $letra += 1;
            print"letra $letra: "."<br/>";
            print"$ar[$inicio]"."<br/>";
        }
        ?>
    </section>
    </main>
</body> 
</html>