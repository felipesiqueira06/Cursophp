<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <?php 

$cotacao = 5.17;

$real = $_REQUEST["din"] ?? 0;

$dolar = $real / $cotacao;

//formatação de moedas com internacionalização!

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
echo "Seus" . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a" . numfmt_format_currency($padrao, $dolar, "USD");
?>
    </main>
</body>
</html>

