<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>

<body>
    <?php
    # primeiro código
    // echo "Olá Mundo";
    // imprime a mensagem Olá Mundo na tela
    /* comentários em linha podem ser feitos com os símbolos # e //, já os comentários com mais de uma linha devem ser feitos com os sinais /* e */
    // phpinfo();
    
    //Variáveis em PHP
    
    $texto = "<h1>Sou aluno da TI36 no Senac de Botucatu</h1>";
    echo $texto;

    $traco = "<br>==============================================================<br>";
    echo $traco;
    $nome = "Chaves";
    $sobrenome = "del Ocho";
    echo "Olá, meu nome é $nome e meu sobrenome é $sobrenome.";
    echo $traco;
    /* Ex. 1 - Crie um script PHP que declare três variáveis: $nome, $idade e $cidade. Atribua valores a essas variávei e exiba uma mensagem que combine esses valores. */
    $nome = "Ataliba";
    $idade = "28";
    $cidade = "Botucatu";
    echo "Meu nome é $nome tenho $idade de CNH e moro em $cidade";
    echo $traco;
    /* 
    Operações Aritméticas no PHP:
    Soma:          +
    Subtração:     -
    Multiplicação: *
    Divisão:       /
    */
    $numero1 = 56;
    $numero2 = 44;

    $soma = $numero1 + $numero2;
    echo "A soma entre $numero1 e $numero2 é igual a $soma";

    echo $traco;
    /* Ex.2 - Crie um script PHP que declare duas variáveis númericas, $num1 e $num2. Realize as operações de soma, subtração, multiplicação e divisão entre essas variáveis e exiba os resultados. */
    $num1 = 7252;
    $num2 = 98;
    $adicao = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $multiplicacao = $num1 * $num2;
    $divisao = $num1 / $num2;
    echo "A soma entre os números é: $adicao<br>";
    echo "A subtração entre os números é: $subtracao<br>";
    echo "A multiplicação entre os números é: $multiplicacao<br>";
    echo "A divisão entre os números é: $divisao";
    echo $traco;
    ?>
</body>

</html>