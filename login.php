<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="procesar_login.php" method="post">
        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" required><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>
        <button type="submit">Iniciar Sesión</button>
    </form>
        <a href='registro.php'>
        <button>Registro</button>
        </a>
</body>
</html>
