<?php
session_start();
require 'config.php';

if (isset($_SESSION['usuario_id']) && isset($_SESSION['rol'])) {
    $usuario_id = $_SESSION['usuario_id'];
    $rol = $_SESSION['rol'];

    // Comprobar si el rol permite el acceso a esta página
    if ($rol === 'Administrador' || $rol === 'Editor') {
        // El usuario tiene permiso para acceder a esta página
        // Coloca aquí el contenido de la página
        // Obtén el nombre del usuario y otros detalles si es necesario
        $query = "SELECT nombre FROM usuarios WHERE id = $usuario_id";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $nombre = $row['nombre'];
    } else {
        // El usuario no tiene permiso para acceder a esta página
        echo 'No tienes permiso para acceder a esta página.';
    }
} else {
    // Si no está autenticado, redirige al inicio de sesión
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de Inicio</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $nombre; ?></h2>
    <p>Rol: <?php echo $rol; ?></p>
    <ul>
        <li><a href="pagina1.php">Página 1</a></li>
        <li><a href="pagina2.php">Página 2</a></li>
        <li><a href="pagina3.php">Página 3</a></li>
        <li><a href="pagina4.php">Página 4</a></li>
        <li><a href="pagina5.php">Página 5</a></li>
    </ul>
    <form method='POST' action='logout.php'>
    <button type="submit">Cerrar Sesión</button>
    </form>
    
</body>
</html>

<!-- <?php
print_r($_SESSION);
?> -->