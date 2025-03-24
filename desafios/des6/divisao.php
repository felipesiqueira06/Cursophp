<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX6 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $dividendo = $_GET["div"] ?? 1;
    $divisor = $_GET["divisor"] ?? 1;
    $resto = $dividendo % $divisor;
    $res = $dividendo / $divisor;
    $res = (int) $res;
    ?>


    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER ['PHP_SELF'] ?>" method = "get">
            <label for="div">Dividendo</label>
            <input type="number" name="div" id="div">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da divisão</h2>
        <?php 
       
      
        ?>

        <table class = "divisao"> 
            <tr>
                <td><?= $dividendo?></td>
                <td><?= $divisor?></td>
            </tr>
            <tr>
                <td><?= $resto?></td>
                <td><?= $res?></td>
            </tr>
        </table>

    </section>
</body>
</html>