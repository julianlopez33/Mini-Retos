<form method = "POST" enctype="multipart/form-data">
    <input type="file" name="imagen" accept="image/jpeg, image/png">
        <input type="submit" value="Subir Imagen">
</form>

<?php
if ($_FILES) {
    $destino = 'uploads/' . basename($_FILES['imagen'] ['name']);
    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $destino)) { 
        echo "Archivo subido con exito.";
    }else{
        echo "error al subir el archivo";
    }
}
?>