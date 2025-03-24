<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
   <header>
    <h1>Resultado final</h1>
   </header>
    
   <main>
    <?php 
    $num = $_GET["num"];
    echo "O numéro escolhido foi : $num";

    $numa = $num + 1; 
    $nums = $num - 1;

    echo " Seu Sucessor é : $numa\n";
   
    echo "Seu Antecessor é : $nums\n";
    ?>
     
     <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>

    </main>
</body>
</html>