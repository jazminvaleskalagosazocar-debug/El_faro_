<?php
require_once '../models/Usuario.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $nuevoUsuario = new Usuario($nombre, $email, $pass);
    $resultado = $nuevoUsuario->guardar();
    
    // Redireccionar a la vista con éxito
    echo $resultado;
}
?>
