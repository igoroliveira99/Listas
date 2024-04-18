<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 7</title>
    </head>
    <body>
        <form action="" method="POST">
            <p><label>Informe o valor</label><br>
            <input type="text" name="numero"></p>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            if (isset($_POST['numero']) && $_POST['numero'] != "")
            {
                $numero = $_POST['numero'];
                echo "<b>$numero metros = " . $numero * 100 . " centímetros.</b>";
            }
        ?>
    </body>
</html>