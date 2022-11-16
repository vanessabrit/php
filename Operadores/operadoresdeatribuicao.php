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
        $preco = 1000;
        $preco2 = 1000;
        echo "<h1>Exercício 01</h1>";
        
        echo "<h2>Aplicar 10% de aumento ao preço de um produto</h2>";
        echo "<h3>Produto 1</h3>";
        echo "O preço do produto é: R$ " . number_format($preco, 2);
        //A expressão ($preco = $preco + ($preco*10/100);) -> como operador de atribuição ($preco += $preco*10/100;)
        $preco += $preco*10/100;
        echo "<br>E o novo preço com 10% de aumento é: R$ " . number_format($preco, 2);
        
        echo "<h2>Aplicar 10% de desconto ao preço de um produto";
        echo "<h3>Produto 2</h3>";
        echo "O preço do produto é: R$ " . number_format($preco2, 2);
        $preco2 -= $preco2*10/100;
        echo "<br>E o novo preço com 10% de desconto é: R$ " . number_format($preco2, 2);
    ?>
</body>
</html>