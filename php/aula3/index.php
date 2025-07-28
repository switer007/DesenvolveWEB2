<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
</head>
<body>
    <?php
        $traco = "<br>==============================================================<br>";
        echo "<h2>Obtendo os tipos de dados com var_dump()</h2>";
        $x = 5;
        $x = 10.365;
        $x = "Hello world!";
        var_dump($x);
        echo $traco;
        echo "<h2>Constantes</h2>";
        echo "As constantes em PHP podem começar com um letra ou underline, mas não tem o sinal $ antes de seu nome<br>Para criar uma constante utilizamos a função <strong>define()</strong><br>";
        define("CONSTANTE", "Olá Mundo!!!");
        echo CONSTANTE;
        echo $traco;
        define("ANIMAIS1", array('cachorro', 'gato', 'pássaro', 'peixe'));
        echo ANIMAIS1[1]."<br>";
        echo ANIMAIS1[3]."<br>";
        var_dump(ANIMAIS1);
        echo $traco;
        echo "<h2>Exemplos com if</h2>";
        $divisor = 20;
        $quociente = 2;
        $resto = $divisor % $quociente;
        if ($resto == 0)
        {
            echo "O número $divisor é par<br>";
        } else {
            echo "O número $divisor é ímpar<br>";
        }
        $num = 30;
        // if ($num < 20)
        // {
        //     echo "O número $num é menor que 20<br>";
        // } else {
        //     echo "O número $num não é menor que 20<br>";
        // }
        echo $num = ($num < 20) ? "O número $num é menor que 20<br>" : "O número $num não é menor que 20<br>";
        $num = 20;
        // if ($num < 20)
        // {
        //     echo "O número $num é menor que 20";
        // } elseif ($num > 20) {
        //     echo "O número $num é maior que 20";
        // } else {
        //     echo "O número $num é igual a 20";
        // }
        echo $num = ($num < 20) ? "O número $num é menor que 20" : 
                    (($num > 20) ? "O número $num é maior que 20" : 
                    "O número $num é igual a 20");
        echo $traco;
        echo "<h2>Exemplos com while</h2>";
        $i = 1;
        while ($i <= 10)
        {
            //echo " $i | ";
            echo $i.($i != 10 ? " | " : ""); //Operador ternário
            $i++;
        }
        echo "<br>";
        // Exemplo com Break
        $i = 1;
        while ($i <= 654687469543213241)
        {
            if ($i == 3) break;
            echo " $i | ";
            $i++;
        }
        echo $traco;
        echo "<h2>Exemplo com do..while</h2>";
        echo "<p>O do..while é um loop de repetição que executa um bloco de código pelo menos uma vez e depois repete enquanto uma condição for verdadeira.</p><p>Diferente do while (que verifica a condição antes de executar), o do..while executa primeiro e depois verifica.</p>";
        $i = 1;
        do {
            echo " $i | ";
            $i++;
        } while ($i <= 10);
        // Exemplo com Break
        echo "<br>";
        $i = 1;
        do {
            if ($i == 3) break;
            echo " $i | ";
            $i++;
        } while ($i <= 6);
        echo "<h2>Exemplo prático</h2>";
        $i = 1;
        while ($i == 0) { // Condição falsa desde o começo
            echo $i . " | ";
            $i++;
        }
        $i = 1;
        do {
            echo $i . " | ";
            $i++;
        } while ($i == 0); // Condição falsa, mas executou o código uma vez
        echo $traco;

    ?>
</body>
</html>