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
    $numero = $_REQUEST["num"] ?? 1;
    $raiz2 = sqrt($numero);
    $raiz3 = pow($numero, 1/3);
    ?>
    <main>
        <h1>Infome um número</h1>
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2 id = "res">Resultado Final</h2>
        <?php 
        echo "<p>Analisando o <strong >número $numero </strong> , temos : </p> ";
        echo "<ul> <li ><p> A sua raiz quadrada é <strong>".number_format($raiz2, 3, "," , ".")." </strong> </p></li>
        <li><p> A sua raiz cúbica é <strong> ".number_format($raiz3, 3, "," , ".")." </strong> </p></li> </ul>";

        ?>
    </section>
</body>
</html>