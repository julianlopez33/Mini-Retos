<?php
$conexion = new mysqli ('localhost', 'root', '', 'bootcamp');
$resultado = $conexion->query("SELECT*FROM armas");
while ($fila = $resultado->fetch_assoc()) {
    echo $fila['nombre'] . '-'; $fila['rango'] . '-'; $fila['edad'] . '-'; $fila['daño'] . '<br>';
}
?>