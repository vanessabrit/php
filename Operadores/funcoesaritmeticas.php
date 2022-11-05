<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $v1 = -5;
        $v2 = 4;
        $v3 = 3;
        $v4 = 12.4;
        $v5 = 2000;
        echo "<h2>Valores Recebidos: $v1, $v2, $v3, $v4, $v5</h2>";
        //O valor absoluto basicamente elimina o sinal de negativo, e considera apenas o valor//
        echo "O valor absoluto de $v1 é: " . abs($v1);
        //A função pow cria uma potenciação//
        echo "<br>O valor de $v2<sup>$v3</sup> é: " .  pow($v2, $v3);
        //A função sqrt cria uma raiz quadrada//
        echo "<br>A raiz de $v2 é: ". sqrt($v2);
        //A função round funciona para valores reais, a função ceil sempre arredonda para cima e floor para baixo//
        echo "<br>O valor de $v4 arredondado é: " . round($v4);
        //A função intval pega a parte inteira de um número real.
        echo "<br>A parte inteira de $v4 é: " . intval($v4);
        //A função number_format é útil caso queira formatar um número em valor monetário//
        echo "<br>O valor de $v5 em moeda é: R$" . number_format($v5, 2, ",", ".");
    ?>
</body>
</html>