<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $nombre = $_GET['nombre'];

    if (empty($nombre)) {
        echo 'Por favor, complete todos los campos.';
    } else {
        // Procesa los datos del formulario y muestra una respuesta
        echo '¡Formulario enviado con éxito! Nombre: ' . $nombre;
    }
}
?>
