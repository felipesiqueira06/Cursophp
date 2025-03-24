<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $v1 = $_REQUEST["v1"];
    $p1 = $_REQUEST["p1"];
    $v2 = $_REQUEST["v2"];
    $p2 = $_REQUEST["p2"];
    $mas = ($v1 + $v2) / 2;
    $map = ($p1 * $v1  + $p2 * $v2)/($p1 + $p2);
    ?>


    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="post">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1">
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1">
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2">
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
        echo "<p> Analisando os valores $v1 e $v2: ";
        echo "<ul> <li> <p> A  <strong> Média Aritmética Simples </strong> entre os valores é igual a ".number_format($mas, 2, "," , ".")." </p> </li>
        <li> <p> A <strong>Média Aritmética Ponderada </strong> com pesos $p1 e $p2 é igual a ".number_format($res, 2, "," , ".").""
        ?>
    </section>
</body>
</html>