<?php
//insertar soldado
$conexion = new mysqli ('localhost', 'root', '', 'bootcamp');
$conexion->query("INSERT INTO armas (nombre,daño,rango) VALUES ('cabrera', '10000','general')");

//mostrar soldados
$resultado = $conexion->query("SELECT*FROM armas");
while ($fila = $resultado->fetch_assoc()) {
    echo $fila['nombre'] . '-' . $fila['rango'] . '-' . $fila['daño'] . '<br>';
}
?>