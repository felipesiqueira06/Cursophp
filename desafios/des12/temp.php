<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $segundos = $_REQUEST["seg"] ?? 0;
    $min = $segundos / 60;
    $horas = $segundos / 3600;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="post">
            <label for="seg">Qual é o total de segundos ?</label>
            <input type="number" name="seg" id="seg">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>