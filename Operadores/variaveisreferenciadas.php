<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Referenciadas</title>
</head>
<body>
    <?php
        echo "<h1>Exercício 03</h1>";
        echo "<h2>Vamos praticar o uso de variáveis referenciadas.</h2>";
       
        // Ainda não esta sendo usada a variável por referência.
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variável A vale $a";
        echo "<br>A variável B vale $b";
       
        //Agora usando variável por referência.
        $c = 3;
        $e = &$c; //Nesta linha, a variável (e) esta recebendo a referência de (c). Caso o valor de (e) modifique, (c) também muda.  
        $e += 5;
        echo "<br>A variável C vale $c";
        echo "<br>A variável E vale $e";
    ?>
</body>
</html>