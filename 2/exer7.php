<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 7</title>
    </head>
    <body>
        <form action="" method="POST">
            <?php
                for ($i = 0; $i < 10; $i++)
                {
                    echo '<p><label>Aluno ' . $i + 1 . '</label><br>';
                    echo '<input type="text" name="nome[]" placeholder="Nome">';
                    echo '<input type="text" name="p1[]" placeholder="P1">';
                    echo '<input type="text" name="p2[]" placeholder="P2"></p>';
                }
            ?>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            if (isset($_POST["nome"]) && isset($_POST["p1"]) && isset($_POST["p2"])) 
            {
                $ok = true;
                $nome = $_POST["nome"];
                $p1 = $_POST["p1"];
                $p2 = $_POST["p2"];
                $media = array();

                for ($i = 0; $i < 10; $i++)
                {
                    if ($nome[$i] != "" && $p1[$i] != "" && $p2[$i] != "")
                    {
                        array_push($media, ($p1[$i] + $p2[$i]) / 2);
                    }
                    else
                    {
                        $ok = false;
                        break;
                    }
                }

                if ($ok)
                {
                    echo "<br><h3>APROVADOS</h3><br>";
                    
                    for ($i = 0; $i < 10; $i++)
                    {
                        if ($media[$i] >= 6)
                        {
                            echo "<b>" . $nome[$i] . "&emsp;Média: " . $media[$i] . "</b><br>";
                        }
                    }

                    echo "<br><h3>REPROVADOS</h3><br>";
                    
                    for ($i = 0; $i < 10; $i++)
                    {
                        if ($media[$i] < 6)
                        {
                            echo "<b>" . $nome[$i] . "</b><br>";
                        }
                    }
                }
            }
        ?>
    </body>
</html>