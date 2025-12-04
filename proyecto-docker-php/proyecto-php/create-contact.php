<?php

echo "<pre>";
echo "Recibiendo datos del formulario....<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "</pre>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

echo   "Nombre: $nombre <br>";
echo   "Teléfono: $telefono <br>";
echo   "Correo: $correo <br>";
echo   "Mensaje: $mensaje <br>";
}

else {
    echo "No se han recibido datos del formulario.";
}