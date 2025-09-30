<?php
//arreglo indexado
$armas = ["espada", "arco", "lanza"];
echo "arma 1:" . $armas [0] . "<br>";

//arreglo asociativo
$soldado = [
    "nombre" => "hector",
    "rango" => "Capitan",
    "edad" => "35"
];
echo "nombre :" . $soldado ["nombre"] . "<br>";
echo "rango: " . $soldado ["rango"] . "<br>";
echo "<br>"; //espacio

//arreglo multidimensional
$peloton = [
    ["nombre" => "luis", "arma" => "espada"],
    ["nombre" => "ana", "arma" => "arco"]
];
echo "primer soldado: " . $peloton [0] ["nombre"] . "<br>";
echo "<br>"; //espacio 

//arreglo de 5 soldados, nombre y rango con foreach checar bien los [] cuando use foreach
// ya que por 2 de esos no servia el codigo 
//aqui use un arreglo asociativo con un foreach para organizar nada mas

$soldados = [
    [
    "nombre" => "carlos",
    "rango" => "cabo"
],
 [
    "nombre" => "ana",
    "rango" => "sargento"
 ],
 [
    "nombre" => "fernando",
    "rango" => "infante"
 ],
 [
    "nombre" => "ricardo",
    "rango" => "coronel"
 ],
 [
    "nombre" => "cristian",
    "rango" => "cabo"
 ],
];

 //usar foreach para recorrer el arreglo
 foreach ($soldados as $soldado){ 

    echo "nombre: " . $soldado['nombre'] . "<br>";
echo "rango: " . $soldado['rango'] . "<br>";
echo "<br>"; //espacio entre soldados


 }



?>
