<?php
//insertar productos
$conexion = new mysqli ('localhost', 'root', '', 'productos');
$conexion->query("INSERT INTO productos (nombre, precio, stock) VALUES ('cargador tipo C', '200', '5')");

//mostrar productos
$resultado = $conexion->query("SELECT*FROM productos");
while ($fila = $resultado->fetch_assoc()){
echo $fila['nombre'] . '-' . $fila['precio'] . '-' . $fila['stock'] . '<br>';
}
?>