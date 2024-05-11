<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Exercício 1</title>
    </head>
    <body>
        <div class="container p-3">
            <form action="" method="POST">
                <div class="mb-3 mt-3">
                    <label class="form-label">Informe o valor</label>
                    <input type="text" class="form-control" name="numero">
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
        </div>
        <?php
            if (isset($_POST['numero']) && $_POST['numero'] != "")
            {
                $numero = $_POST['numero'];

                if ($numero > 0)
                {
                    echo '<div class="container p-3"><div class="alert alert-dark"><strong>Valor Positivo</strong></div></div>';
                }
                else if ($numero < 0)
                {
                    echo '<div class="container p-3"><div class="alert alert-dark"><strong>Valor Negativo</strong></div></div>';
                }
                else if ($numero == 0)
                {
                    echo '<div class="container p-3"><div class="alert alert-dark"><strong>Igual a Zero</strong></div></div>';
                }
            }
        ?>
    </body>
</html>