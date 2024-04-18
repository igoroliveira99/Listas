<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 2</title>
    </head>
    <body>
        <form action="" method="POST">
            <?php
                for ($i = 1; $i <= 7; $i++)
                {
                    echo '<p><label>Informe o ' . $i . 'º valor</label><br>';
                    echo '<input type="text" name="numero' . $i . '"></p>';
                }
            ?>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            $ok = true;
            $numero = array();

            for ($i = 1; $i <= 7; $i++)
            {
                if (isset($_POST['numero'.$i]) && $_POST['numero'.$i] != "")
                {
                    $numero[$i] = $_POST['numero'.$i];
                }
                else
                {
                    $ok = false;
                }
            }

            if ($ok)
            {
                $menor = min($numero);
                $posic = array_search($menor, $numero);
                echo "<b>O menor valor é $menor na posição $posic</b>";
            }
        ?>
    </body>
</html>