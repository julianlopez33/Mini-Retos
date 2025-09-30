<?php
$a = 10;
$b = 5;

echo  "suma:" . ($a + $b) . "<br>";
echo "resta:" . ($a - $b) . "<br>";
echo  "multiplicacion:" . ($a * $b). "<br>";
echo  "division:". ($a / $b). "<br>";
echo "modulo:" . ($a % $b). "<br>";

echo ($a > $b) ? " a es mayor<br>": "b es mayor o igual<br>";
echo ($a == 10) ? "a es igual a 10<br>": "a no es 10<br>";

$cond1 = true;
$cond2 = false;
echo ($cond1 && $cond2) ? "ambas son verdaderas <br>": "no son ambas verdaderas<br>";
echo ($cond1 || $cond2) ? "al menos una es verdadera<br>": "ninguna es verdadera<br>";

//calcular el area de un rectangulo usando variables $base y $altura
$base = 4;
$altura = 7;
//formula base por altura = area 
$area = ($base * $altura) ;

//mostrar resultado
echo "la base es: $base<br>";
echo "la altura es: $altura<br>";
echo "la area del rectangulo es: $area<br>";



?>