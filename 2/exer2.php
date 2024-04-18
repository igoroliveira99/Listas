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
                for ($i = 0; $i < 10; $i++)
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
                $num = $_POST["numero"];
                $neg = 0;
                $pos = 0;
                $par = 0;
                $imp = 0;

                foreach ($num as $n)
                {
                    if ($n != "")
                    {
                        if ($n > 0)
                        {
                            $pos++;
                        }
                        elseif ($n < 0)
                        {
                            $neg++;
                        }

                        if ($n % 2 == 0)
                        {
                            $par++;
                        }
                        else
                        {
                            $imp++;
                        }
                    }
                    else
                    {
                        $ok = false;
                    }
                }

                if ($ok)
                {
                    echo "<b>Qtde. de negativos digitados: $neg.<br>";
                    echo "Qtde. de positivos digitados: $pos.<br>";
                    echo "Qtde. de pares digitados: $par.<br>";
                    echo "Qtde. de ímpares digitados: $imp.</b>";
                }
            }
        ?>
    </body>
</html>