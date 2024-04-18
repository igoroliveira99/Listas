<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 8</title>
    </head>
    <body>
        <form action="" method="POST">
            <p><label>Informe o tamanho (m²) da área a ser pintada</label><br>
            <input type="text" name="tamanho"></p>
            <p><button type="submit">Enviar</button></p>
        </form>
        <?php
            if (isset($_POST['tamanho']) && $_POST['tamanho'] != "")
            {
                $tamanho = $_POST['tamanho'];
                $latas = ceil($tamanho / 3 / 18);
                $preco = $latas * 80;
                echo "<b>Latas de tinta a serem compradas: $latas</b><br><b>Preço total: R$ $preco,00</b>";
            }
        ?>
    </body>
</html>