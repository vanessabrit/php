<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos em PHP</title>
</head>
<body>
    <?php 
        $nota1 = 25;
        $nota2 = 20;
        echo "A nota 1 é $nota1<br>";
        echo "A nota 2 é $nota2<br>";
       
        echo "<br>A subtração é: ". ($nota1-$nota2);
        echo "<br>A soma é: ". ($nota1+$nota2);
        echo "<br>A multiplicação é: ". ($nota1*$nota2);
        echo "<br>A divisão é: ". ($nota1/$nota2);
        echo "<br>O módulo é: ". ($nota1%$nota2);
        echo "<br> A média é: ". ($nota1+$nota2)/2;
    ?>
</body>
</html>