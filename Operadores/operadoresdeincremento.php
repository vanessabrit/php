<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento</title>
</head>
<body>
    <?php
        /* Esse exercicio pretende demonstrar o uso 
        de operadores de incremento e decremento*/ 
        echo "<h1>Exercício 02</h1>";
        echo "<h2>Mostrar qual foi o ano anterior ao ano atual</h2>";

        $ano_atual = 2022;
        echo "O ano atual é $ano_atual e o ano anterior é " . --$ano_atual?>

        /* Pré - incremento $a = $a + 1     ++$a -> ele incrementa antes de qualquer coisa.
           Pós - incremento $a = $a + 1     $a++ -> ele faz primeiro o uso da variável e depois incrementa.
           Pré - decremento $a = $a - 1     --$a
           Pós - decremento $a = $a - 1     $a-- */
</body>
</html>