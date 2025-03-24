<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX7 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $salario = $_GET["sal"] ?? 0;
    $smin = 1518;
    $qtsal = $salario / $smin;
    $qtsal = (int) $qtsal;
    $sobra = $salario - $smin * $qtsal ?? 0;
    ?>


    <main>
        <h1>Infome seu salário</h1>
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário R$</label>
            <input type="number" name="sal" id="sal">
            <p>Considerando o salário minímo <strong>de R$ 1.518,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id= "resultado">
        <h2>Resultado final</h2>
        <?php 
        echo "Quem recebe um salário de R\$ ".number_format($salario, 2, "," , ".")." ganha <strong> $qtsal salários minímos </strong> + R\$ ".number_format($sobra, 2, "," , ".").".";
        ?>

    </section>
</body>
</html>
