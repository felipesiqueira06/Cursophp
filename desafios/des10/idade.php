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
    $nasc = $_REQUEST ["ano"];
    $ano = $_REQUEST ["atual"];
    $atual = date("Y");
    $idade = $ano - $nasc ; 
    ?>


    <main>
        <h1>Calculando a sua idade </h1>
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="post">
            <label for="ano">Em que ano você nasceu ?</label>
            <input type="number" name="ano" id="ano">
            <label for="atual">Quer saber sua idade em que ano (estamos em <?php echo " <strong >$atual </strong>"?>)</label>
            <input type="number" name="atual" id="atual">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2 id = "res">Resultado</h2>
        <?php 
        echo "<p> Quem nasceu em $nasc vai ter <strong> $idade anos </strong> em $ano !";
        ?>
    </section>
</body>
</html>