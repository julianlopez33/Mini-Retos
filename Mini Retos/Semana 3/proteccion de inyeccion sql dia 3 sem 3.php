<?php
$conexion = new mysqli ('localhost', 'root', '', 'bootcamp');
$nombre = $conexion->real_escape_string($_Post['nombre']);
$rango = $conexion->real_escape_string($_POST['rango']);
$conexion->query("INSERT INTO armas (nombre,rango) VALUES ('$nombre','$rango')");
?>