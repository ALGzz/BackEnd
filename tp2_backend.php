<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea Clase 3</title>
</head>
<body>
    <?php
    //crear una variable y validar que sea un numero positivo
    $n=5;
    if ($n>0) {
        echo "Es un número positivo";
        echo "<br>";
    }
    //crear una variable y validar que sea un numero mayor que 1 y menor que 10
    $n1=3;
    if ($n1>1 & $n1<10) {
        echo "Es mayor a 1 y menor a 10";
        echo "<br>";
    }
    //crear una variable y validar que sea un numero mayor que 10 o menor que 2
    $n2=16;
    if ($n2>10 || $n2<2) {
        echo "Cumple la condicion";
        echo "<br>";
        }
    //Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. 
    //Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. 
    //Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera
    // y el resto de la división. 
    //Si numero1 y numero2 son iguales, mostrar el siguiente mensaje 
    //“Los números ingresados son iguales”.
    $n3=20; 
    $n4=10;
    if ($n3>$n4) {
        echo "Suma:";
        echo $n3+$n4."\n";
        echo "y Resta:";
        echo $n3-$n4."\n";
        echo "<br>";
      } elseif ($n3<$n4) {
        echo "Division:"; 
        echo $n3/$n4."\n"; 
        echo "y Resto:";
        echo $n3%$n4."\n";
        echo "<br>";
      } else {
        echo "Los números ingresados son  iguales";
        echo "<br>";
      }
    
    ?>    
</body>
</html>