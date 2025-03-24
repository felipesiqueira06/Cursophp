<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Des2</title>
</head>
<body>
<header>
    <h1>Gerando números aleatórios</h1>
</header>
   <main>
    <p>Gerando um número aleatório entre 1 e 100...</p>
    <?php 
    $num = mt_rand(1,100);
    echo "O número gerado foi $num"
    ?>
    <form action="ale.php" method = "get"><input type="submit" value="Gerar outro"></form>
    <?php 
   
    ?>
   </main>
</body>
</html>