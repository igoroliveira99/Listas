<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 5</title>
    </head>
    <body>
        <form action="" method="POST">
            <?php
                for ($i = 0; $i < 20; $i++)
                {
                    echo '<input type="number" name="numero[]" placeholder="' . $i + 1 . 'º Número"><br>';
                }
            ?>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            if (isset($_POST["numero"]))
            {
                $ok = true;
                $numero = $_POST["numero"];
                $primo = array();
                
                foreach ($numero as $n)
                {
                    $ePrimo = true;
                
                    if ($n != "")
                    {
                        if ($n > 0)
                        {
                            for ($i = $n - 1; $i > 1 && $ePrimo; $i--)
                            {
                                if ($n % $i == 0)
                                {
                                    $ePrimo = false;
                                }
                            }
                        }
                        else
                        {
                            $ePrimo = false;
                        }

                        if ($ePrimo)
                        {
                            array_push($primo, $n);
                        }
                    }
                    else
                    {
                        $ok = false;
                        break;
                    }
                }

                if ($ok)
                {
                    if (count($primo) > 0)
                    {
                        echo "<b>";

                        foreach ($primo as $p)
                        {
                            echo " $p, ";
                        }

                        echo "são primos!</b>";
                    }
                    else
                    {
                        echo "<b>Nenhum dos números são primos!</b>";
                    }
                }
            }
        ?>
    </body>
</html>