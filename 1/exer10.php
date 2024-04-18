<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 10</title>
    </head>
    <body>
        <form action="" method="POST">
            <p><label>Peso</label><br>
            <input type="text" name="peso"></p>
            <p><label>Altura</label><br>
            <input type="text" name="altura"></p>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            if (isset($_POST['peso']) && $_POST['peso'] != "" && isset($_POST['altura']) && $_POST['altura'] != "")
            {
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];
                $imc = $peso / ($altura * $altura);

                if ($imc < 18.5)
                {
                    echo "<b>Abaixo do peso.</b>";
                }
                elseif ($imc >= 18.5 && $imc <= 24.9)
                {
                    echo "<b>Peso ideal.</b>";
                }
                else
                {
                    echo "<b>Acima do peso.</b>";
                }
            }
        ?>
        <br><br><b>Referência: </b><a href="https://www.tuasaude.com/imc/" target="_blank">https://www.tuasaude.com/imc/</a>
    </body>
</html>