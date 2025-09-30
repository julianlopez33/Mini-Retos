<?php
$conexion = new mysqli ('localhost', 'root','', 'bootcamp');
if ($conexion->connect_error) {
    die ("error de conexion:" . $conexion->connect_error);
} else {
    echo "conexion establecida con exito, ¡Bienvenido Soldado!";
}
?>