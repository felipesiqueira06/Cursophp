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
    $preco = $_REQUEST["preco"] ?? 0;
    $porcen = $_REQUEST["porc"] ?? 0;
    $res = $preco * ($porcen / 100);
    $tot = $res + $preco;

    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="post">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco">
            <label for="porc">Qual será o porcentual de reajuste (<?php echo "$porcen%";?>)</label>
            <input type="number" name="porc" id="porc">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do reajuste</h2>
        <?php 
        echo "O produto que custava ".number_format($preco, 2, "," , ".").", com <strong>$porcen% de aumento</strong> vai passar a custar <strong>".number_format($tot, 2, "," , ".")."</strong> a partir de agora  ";
        ?>
    </section>
</body>
</html>