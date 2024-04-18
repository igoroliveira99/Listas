<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 3</title>
    </head>
    <body>
        <form action="" method="POST">
            <?php
                for ($i = 0; $i < 10; $i++)
                {
                    echo '<input type="number" name="numero[]" placeholder="' . $i + 1 . 'º Número"><br>';
                }
            ?>
            <input type="number" name="multip" placeholder="Multiplicador">
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            if (isset($_POST["numero"]) && isset($_POST["multip"]) && $_POST["multip"] != "")
            {
                $ok = true;
                $num = $_POST["numero"];
                $mul = $_POST["multip"];

                foreach ($num as $n)
                {
                    if ($n == "")
                    {
                        $ok = false;
                    }
                }

                if ($ok)
                {
                    foreach ($num as $n)
                    {
                        echo "<b>$n x $mul = " . $n * $mul . "<br></b>";
                    }
                }
            }
        ?>
    </body>
</html>