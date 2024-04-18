<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 6</title>
    </head>
    <body>
        <form action="" method="POST">
            <?php
                for ($i = 0; $i < 5; $i++)
                {
                    echo '<p><label>Produto ' . $i + 1 . '</label><br>';
                    echo '<input type="text" name="prod[]" placeholder="Nome"><br>';
                    echo '<input type="text" name="prec[]" placeholder="Preço"></p>';
                }
            ?>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            if (isset($_POST["prod"]) && isset($_POST["prec"])) 
            {
                $ok = true;
                $prod = $_POST["prod"];
                $prec = $_POST["prec"];
                $qtde = 0;
                $nome = array();
                $soma = 0;
                $cont = 0;

                for ($i = 0; $i < 5; $i++)
                {
                    if ($prod[$i] != "" && $prec[$i] != "")
                    {
                        if ($prec[$i] < 50)
                        {
                            $qtde++;
                        }
                        elseif ($prec[$i] > 100)
                        {
                            $soma += $prec[$i];
                            $cont++;
                        }
                        else
                        {
                            array_push($nome, $prod[$i]);
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
                    echo "<b>Qtde. de produtos com preço inferior a R$50,00: $qtde<br>";
                    echo "Produtos com preço entre R$50,00 e R$100,00: ";
                    
                    foreach ($nome as $n)
                    {
                        echo " $n; ";
                    }

                    echo "<br>Média dos preços dos produtos superior a R$100,00: R$ " . $soma / $cont . "</b>";
                }
            }
        ?>
    </body>
</html>