<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas - Checkbox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <a class="btn btn-primary" href="javascript: history.go(-1)" role="button">Voltar</a> | <a class="btn btn-primary" href="index.html" role="button">Home</a>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['interesses'])) {
                echo "<h2>Interesses selecionados</h2>";
                echo "<ul>";
                    foreach ($_POST['interesses'] as $interesse) {
                        echo "<li>".$interesse."</li>";
                    }
                echo "</ul>";
            } else {
                echo "<p>Nenhum checkbox selecionado</p>";
            }
        } else {
            echo "<p>O formulário não foi enviado.</p>";
        }
    ?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>