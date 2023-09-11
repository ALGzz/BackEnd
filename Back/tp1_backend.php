<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>
<?php
//imprimir "Hola Mundo"
echo "<p>Hola Mundo</p>\n";
//Crear una Variable en cadena e imprimir
$variable1 = "<p>Hola Mundo</p>\n";
echo $variable1;
//Crear dos variables y mostrar por pantalla, suma, resta, multiplicaicipn, division y resto
$variable2 = 10;
$variable3 = 2;
echo "<p>Suma</p>\n";
echo $variable2+$variable3."\n";
echo "<p>Resta:</p>\n";
echo $variable2-$variable3;
echo "<p>Multiplicacion:</p>\n";
echo $variable2*$variable3;
echo "<p>Division:</p>\n";
echo $variable2/$variable3;
echo "<p>Resto:</p>\n";
echo $variable2%$variable3;
//transformar de grados Celsius a Fahrenheit e imprimir
$variable4 = 20;
$variable41 = 9;
$variable42 = 5;
$variable43 = 32;
//formula:
echo "<p>Grados Fahrenheit:</p>\n";
echo $variable4*$variable41/$variable42+$variable43;
//Implementar algoritmos que permitan:
// Calcular el perimetro y el área de un rectangulo, dado que su base es 18cm y su altura 12cm
$variable5 = 18;
$variable51 = 12;
echo "<p>Perimetro del rectangulo:</p>\n"; 
echo $variable5+$variable51+$variable5+$variable51;
echo "<p>Area del rectangulo:</p>\n";
echo $variable5*$variable51;
// Calcular el perimetro y el area de un circulo dado que su radio es de 30cm.
$variable6 = 30;
$variable61 = 2;
echo "<p>Perimetro del círculo:</p>\n";
echo $variable61*pi()*$variable6;
echo "<p>Area del circulo:</p>\n";
echo pow($variable6,2)*pi();
?>
</body>
</html>