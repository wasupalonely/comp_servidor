
<?php
session_start();
require 'config.php';

if ($_POST['nombre'] !== null && $_POST['correo'] !== null && $_POST['contrasena'] !== null && $_POST['rol'] !== null) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Hash de la contraseña
    $rol = $_POST['rol'];

    // Insertar el nuevo usuario en la base de datos
    $query = "INSERT INTO usuarios (nombre, correo, contrasena, rol) VALUES ('$nombre', '$correo', '$contrasena', '$rol')";
    
    if (mysqli_query($con, $query)) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($con);
    }
    
    header('Location: login.php');
    exit();
}
?>

