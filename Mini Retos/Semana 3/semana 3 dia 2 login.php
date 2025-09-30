<?php

session_start ();
if ($_POST) {
    $_SESSION['usuario'] = $_POST['nombre'];
    echo "Bienvenido," . $_SESSION['usuario'];
}
if (isset($_POST['cerrar_sesion'])){
    session_unset();
    session_destroy();
    header ("location: semana 3 dia 2 login.php"); //te manda  al cerrar la sesion
}
?>

<form method = "Post">
    nombre: <input type = 'text' name = "nombre"><br>
    <input type= "submit" value = "entrar">
    <button type = "submit" name = "cerrar_sesion">cerrar sesion</Button>
</form>
