<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><strong>FORMULÀRIO</strong></h1>
    <?php 
    $nome = $_REQUEST['nome'] ?? 'jericó'
    ?>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="nome">digite o seu nome </label>
                <input type="text" name="nome" id="idnome" value="<?= $nome ?>">
                <input type="submit" value="enviar">
            </form>
        </section>
    </main>
    <section id="resultat">
        <?php 
        print"olá,$nome"
        ?>
    </section>
</body>
</html>