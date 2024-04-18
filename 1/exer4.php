<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 4</title>
    </head>
    <body>
        <form action="" method="POST">
            <p><label>Informe um número</label><br>
            <input type="text" name="numero"></p>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            if (isset($_POST['numero']) && $_POST['numero'] != "")
            {
                $numero = $_POST['numero'];
                echo "<h3>Tabuada do $numero </h3>";

                for ($i = 0; $i <= 10; $i++)
                {
                    echo "<b>$numero x $i = " . $numero * $i . "</b><br>";
                }
            }
        ?>
    </body>
</html>