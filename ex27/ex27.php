<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $nota1 = $_REQUEST['nota1'] ?? 8;
    $nota2 = $_REQUEST['nota2'] ?? 6;
    $média = ($nota1 + $nota2)/2;
    if($média >= 7){
        $situação = 'aprovado';
    }
    elseif($média >=5){
        $situação = 'recuperação';
    }
    else{
        $situação = 'reprovado';
    }
    ?>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="nota1">digite a primeira nota: </label>
                <input type="text" name="nota1" id="idnota1" value="<?=$nota1 ?>">
                <label for="nota2">digite a segunda nota: </label>
                <input type="text" name="nota2" id="idnota2" value="<?=$nota2 ?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            print"média: $média"
            ?>
            <p></p>
            <?php 
            print"situação: $situação"
            ?>
        </section>
    </main>
</body>
</html>