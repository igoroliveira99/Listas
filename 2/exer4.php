<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 4</title>
    </head>
    <body>
        <form action="" method="POST">
            <p><label>Nº do mês</label><br>
            <input type="number" min=1 max=12 name="mes"></p>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            $nome = array(1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");

            if (isset($_POST["mes"]) && $_POST["mes"] != "")
            {
                $mes = $_POST["mes"];
                echo "<b>Mês: $nome[$mes]</b>";
            }
        ?>
    </body>
</html>