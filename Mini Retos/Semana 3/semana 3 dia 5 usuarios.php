<?php
//insertar usaurios
$conexion = new mysqli ('localhost', 'root','','usuarios');
$conexion->query("INSERT INTO usuarios ( nombre, Password) VALUES ( 'juan perez', 'admin123')");

//mostrar usuarios
$resultado = $conexion->query("SELECT*FROM usuarios");
while ($fila = $resultado->fetch_assoc()) {
    echo  $fila['nombre'] . '-' . $fila['Password'] . '<br>';
}
?>