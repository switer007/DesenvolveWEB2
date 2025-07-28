<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <a href="javascript: history.go(-1)">Voltar</a> | <a href="tabuada.php">Tabuada</a>
    <h1>Formulário utilizando superglobal $_SERVER - PHP_SELF</h1>
    <h2>Soma de 2 números</h2>

    <?php
        //Operador de Coalescência Nula
        //Verifica se o valor está nulo e escreve 0;
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;

        //$valor1 = isset($_GET['v1']) ? $_GET['v1'] : 0;

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">Valor 1</label>
        <input type="number" name="v1" id="v1" value="<?php echo $valor1; ?>"><br>
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?=$valor2?>"><br>
        <input type="submit" value="Somar">
    </form>

    <h2>Resultado da Soma</h2>

    <?php 

        $soma = $valor1 + $valor2;
        echo "<p>A soma entre os valores $valor1 e $valor2 é <strong>$soma</strong></p>";

    ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>