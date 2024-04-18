<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 1</title>
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

                if ($numero > 0)
                {
                    echo "<b>Valor Positivo</b>";
                }
                else if ($numero < 0)
                {
                    echo "<b>Valor Negativo</b>";
                }
                else if ($numero == 0)
                {
                    echo "<b>Igual a Zero</b>";
                }
            }
        ?>
    </body>
</html>