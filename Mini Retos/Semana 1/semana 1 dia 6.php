<?php
function saludo () {
    echo "¡bienvenido al Bootcamp, soldado!<br>";
    echo "<br>";
}
function disparar ($arma) {
    echo "disparando con $arma<br>";
    echo "<br>";
}
function sumar ($a,$b){
    return $a + $b;
}
saludo ();
disparar ("espada laser");
echo "la suma es :" . sumar(5,7) . "<br>";
echo "<br>";

//nombre
function nombre ($nombre) {
    echo "soy: $nombre<br>";
    echo "<br>";
}
nombre ("Daniel");

//rango
function rango ($rango){
    echo "rango: $rango<br>";
    echo "<br>";
}
rango ("Cabo");

//listo
function listo ($listo) {
    echo " $listo<br>";

}
listo ("¡listo para la batalla!");
//echo "<br>; se usa para hacer un espacio entre cada echo y function lo que muestra en la pantalla

?>