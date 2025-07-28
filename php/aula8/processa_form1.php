<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas - Select</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php include "menu.php";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $cidade = $_POST['cidade'];
            echo "<h2>Você escolheu a cidade: </h2>";

            switch ($cidade) {
                case 'sp':
                    echo "<strong>São Paulo</strong>";
                    break;
                case 'rj':
                    echo "<strong>Rio de Janeiro</strong>";
                    break;
                case 'bh':
                    echo "<strong>Belo Horizonte</strong>";
                    break;
                case 'poa':
                    echo "<strong>Porto Alegre</strong>";
                    break;
                case 'par':
                    echo "<strong>Pardinho</strong>";
                    break;
                case 'ita':
                    echo "<strong>Itatinga</strong>";
                    break;
                case 'bof':
                    echo "<strong>Bofete</strong>";
                    break;
                
                default:
                    echo "<strong>Cidade não encontrada</strong>";
                    break;
            }


        } else {
            echo "<div class=\"alert alert-warning\"><p>O formulário não foi enviado.</p></div>";
        }
        ?>
        
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>