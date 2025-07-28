<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>Resolva os exercícios conforme aprendemos em sala de aula:</h2>
    <ol>
        <li>Faça um conversor de moedas, U$ => R$; (R$ 5,54)</li>
        <?php 
            echo "<pre>";
            $valorInicial = 50;
            $conversor = $valorInicial * 5.54;
            echo "U$ 50.00 é igual a R$ $conversor na cotação de hoje</pre>";
        ?>
        <li>Verifique se o número é par ou impar;</li>
        <li>Desenvolva um gerador de números aleatórios de 0 a 100 utilizando a função rand();</li>
        <li>Crie uma variável para armazenar seu nome e outra para armazenar sua idade. Em seguida, exiba uma mensagem utilizando essas variáveis, Ex.: "Meu nome é [Nome] e tenho [Idade] anos.";</li>
        <li>Faça um programa que receba dois números como entrada e retorne a soma deles;</li>
        <li>Escreva uma função que receba uma temperatura em Celsius e a converta para Fahrenheit;</li>
        <li>Implemente uma função que verifique se a palavra é um palíndromo;</li>
        <li>Crie uma função que verifique se o número é primo, intervalo de 0 a 100.</li>
    </ol>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>

