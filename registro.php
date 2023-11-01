<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
</head>
<body>
    <h2>Crear Usuario</h2>
    <form action="procesar_registro.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" required><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>
        <label for="rol">Rol:</label>
        <select name="rol" required>
            <option value="Administrador">Administrador</option>
            <option value="Editor">Editor</option>
            <option value="Usuario">Usuario</option>
        </select><br>
        <button type="submit">Registrar Usuario</button>
    </form>
    
</body>
</html>
