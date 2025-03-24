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
    $saque = $_REQUEST["valor"];
    $cem = 100;
    $imgq100 = $saque / $cem;
    $imgint = (int) $imgq100;
    $img100 = "imagens/100-reais.jpg";
    $imgquant50 = $saque / 50 ;
    $imgint50 = (int) $imgquant50;
    $img50 = "imagens/50-reais.jpg";
    $imgint50 = $imgint50 > 99 ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="post">
            <label for="valor">Qual valor você deseja sacar ? (R$)</label>
            <input type="number" name="valor" id="valor">
            <p>*Notas disponíveis :R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de R$ <?php echo " $saque ";?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <?php 
        echo '<p><img src= "'.$img100.'" alt=" Imagem">';
        echo "x".number_format($imgint, 0, "," , ".")."</p>";

        echo '<img src= "'.$img50.'" alt=" Imagem">';
        echo "x".number_format($imgint50, 0, "," , ".")."";
        ?>
    </section>
</body>
</html>