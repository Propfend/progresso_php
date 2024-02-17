<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $segundos = $_REQUEST['segundos'] ?? 3600;
    $semanas = intdiv($segundos, 604800);
    $restosemana = $segundos%604800;
    $dias = intdiv($restosemana, 86400);
    $restodias = $restosemana%86400;
    $horas = intdiv($restodias, 3600);
    $restohoras = $restodias%3600;
    $minutos = intdiv($restohoras, 60);
    $restominutos = $restohoras%60;
    $segundos = $restominutos;
    ?>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="segundos">quantos segundos?: </label>
                <input type="number" name="segundos" id="idsegundos" value="<?=$segundos?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            print"semanas: $semanas"
            ?>
            <p></p>
            <?php 
            print"dias: $dias"
            ?>
            <p></p>
            <?php 
            print"horas: $horas"
            ?>
            <p></p>
            <?php 
            print"minutos: $minutos"
            ?>
            <p></p>
            <?php 
            print"segundos: $segundos"
            ?>
        </section>
    </main>
</body>
</html>