<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 3</title>
    </head>
    <body>
        <form action="" method="POST">
            <p><label>Informe o 1º valor</label><br>
            <input type="text" name="numero1"></p>
            <p><label>Informe o 2º valor</label><br>
            <input type="text" name="numero2"></p>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            if (isset($_POST['numero1']) && $_POST['numero1'] != "" && isset($_POST['numero2']) && $_POST['numero2'] != "")
            {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $soma = $numero1 + $numero2;
                
                if ($numero1 == $numero2)
                {
                    echo "<b>O triplo da soma é igual a " . $soma * 3 . ".</b>";
                }
                else
                {
                    echo "<b>A soma é igual a $soma.</b>";
                }
            }
        ?>
    </body>
</html>