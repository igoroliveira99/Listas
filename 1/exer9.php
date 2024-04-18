<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 9</title>
    </head>
    <body>
        <form action="" method="POST">
            <p><label>Informe seu ano de nascimento</label><br>
            <input type="text" name="nasc"></p>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            define ("ATUAL", 2024);

            if (isset($_POST['nasc']) && $_POST['nasc'] != "")
            {
                $nasc = $_POST['nasc'];
                $idade = ATUAL - $nasc;
                $dias = $idade * 365;
                $ano25 = 2025 - $nasc;
                echo "<b>Você possui $idade anos.<br>Já viveu $dias dias.<br>Em 2025 você terá $ano25 anos.</b>";
            }
        ?>
    </body>
</html>