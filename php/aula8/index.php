<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8 - Select</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php include "menu.php"; ?>
        <form action="processa_form1.php" method="post">
            <label for="cidade">Escolha sua cidade:</label>
            <select name="cidade" id="cidade">
                <option value="sp">São Paulo</option>
                <option value="rj">Rio de Janeiro</option>
                <option value="bh">Belo Horizonte</option>
                <option value="poa">Porto Alegre</option>
                <option value="par">Pardinho</option>
                <option value="ita">Itatinga</option>
                <option value="bof">Bofete</option>
            </select>
            <p><button type="submit" class="btn btn-primary">Enviar</button></p>
        </form>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>