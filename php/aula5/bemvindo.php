<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="javascript: history.go(-1)">Voltar</a> | <a href="index.php">Home</a><br>
<?php 
    var_dump($_GET);


    echo "<p>Seja bem-vindo! <strong>".$_GET["nome"]."</strong><br>O e-mail digitado foi: ".$_GET["email"]."</p>";

   

?>
</body>
</html>