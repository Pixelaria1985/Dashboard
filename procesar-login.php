<?php
// Simulación de credenciales
$usuario_valido = 'admin';
$contrasena_valida = '1234';

if ($_POST['usuario'] === $usuario_valido && $_POST['contrasena'] === $contrasena_valida) {
    session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
    header("Location: index.php");
} else {
    header("Location: login.php?error=1");
}
