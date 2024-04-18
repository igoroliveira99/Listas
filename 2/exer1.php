<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 1</title>
    </head>
    <body>
        <form action="" method="POST">
            <?php
                for ($i = 0; $i < 10; $i++)
                {
                    echo '<p><label>Aluno ' . $i + 1 . '</label><br>';
                    echo '<input type="text" name="nome[]" placeholder="Nome">';
                    echo '<input type="number" min=0 max=10 name="nota[]" placeholder="Nota"></p>';
                }
            ?>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            if (isset($_POST["nota"]) && isset($_POST["nome"])) 
            {
                $ok = true;
                $nota = $_POST["nota"];
                $nome = $_POST["nome"];

                for ($i = 0; $i < 10; $i++)
                {
                    if ($nome[$i] == "" || $nota[$i] == "")
                    {
                        $ok = false;
                    }
                }

                if ($ok)
                {
                    $maior = max($nota);
                    $pos = array_search($maior, $nota);
                    $aluno = $nome[$pos];
                    $media = array_sum($nota) / count($nota);
                    echo "<b>Média da classe: $media<br>A maior nota é do aluno $aluno!</b>";
                }
            }
        ?>
    </body>
</html>