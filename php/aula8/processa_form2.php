<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas - Select Múltiplo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php include "menu.php";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST['interesses'])) {
                    echo "Seus interesses selecionados são:<br>";
                    echo "<ul>";
                        foreach ($_POST['interesses'] as $interesse) {
                            echo "<li><strong>".htmlspecialchars($interesse)."</strong></li>";
                        }
                        echo "</ul>";
                } else {
                    echo "Nenhum interesse selecionado";
                }
            }
        ?>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>