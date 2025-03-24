<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Conversor de moedas</h1>
</header>
<main>
    <?php 
    $din = $_GET ["reais"];
    $dol = $din * 0.17;
    echo "Seus R\$ $din equivalem a <strong> US\$ $dol <strong> "; 
    
    echo "<p> <strong>  Cotação fixa de R\$ 5.78 <strong>, informada diretamente no código
    </p>" 
    ?>
</main>
</body>
</html>