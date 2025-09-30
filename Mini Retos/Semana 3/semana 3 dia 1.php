<?php
if ($_POST) {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $edad = trim($_POST['edad']);
    $errores = [];

    // Validaciones
    if (empty($nombre)) {
        $errores[] = "El nombre es obligatorio.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo no es válido.";
    }
    if (!is_numeric($edad) || $edad < 18) {
        $errores[] = "La edad debe ser un número mayor o igual a 18.";
    }

    // Mostrar resultados
    if (count($errores) > 0) {
        echo "<b>Registro fallido:</b><br>";
        foreach ($errores as $e) {
            echo $e . "<br>";
        }
    } else {
        echo "Registro válido: $nombre - $email - $edad";
    }
}
?>

<form method="post">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    Edad: <input type="text" name="edad"><br>
    <input type="submit" value="Enviar">
</form>
