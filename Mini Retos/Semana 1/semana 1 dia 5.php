<?php
for ($i = 1; $i <=5; $i++){
    echo "soldado en fila numero $i <br>";
}

$x = 1;
while ($x <= 3){
    echo "entrenando soldado $x<br>";
    $x++;
}
$armas = ["espada", "arco", "lanza"];
foreach ($armas as $arma) {
    echo "arma disponible: $arma<br>";
}


//numeros del 1 al 10
for ($i = 1; $i <=10; $i++){
    echo "numeros : $i <br>";
}
?>
