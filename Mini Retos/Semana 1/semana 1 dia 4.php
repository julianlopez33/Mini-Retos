<?php
$edad = 20;
if ($edad >= 18) {
    echo "<p>eres mayor de edad. puedes entrar al campo de batalla. </p>";
} else{
    echo "<p>eres menor de edad. aun no puedes entrar al campo de batalla</p>";
}
$arma = "espada";
switch ($arma) {
    case "espada";
    echo "tu arma es la espada";
    break;
    case "arco";
    echo "tu arma es el arco";
    break;
    case "Arma de fuego";
    echo "tu arma es la arma de fuego";
    break;
      default : 
    echo "no tienes arma asignada";
   
}
//mision menor de 70 reprobaste mayor aprobaste
$mision = 70;
if ( $mision >=70){
    echo "<p>aprobaste la mision soldado. ¡Felicidades!. </p>";
}else{
      echo "<p>reprobaste la mision soldado. mejora para la proxima. </p>";
    }

?>