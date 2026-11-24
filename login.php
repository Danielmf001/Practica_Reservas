<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AulaReservas - Login</title>
</head>
<body>
    <main>
        <h1>AulaReservas</h1>
        <p>Acceso a la gestión de salas</p>

        <form action="login.php" method="POST">
            <div>
                <label for="usuario">Usuario:</label><br>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div>
                <label for="password">Contraseña:</label><br>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label><br>
                    <input type="checkbox" name="recordar" value="si"> Recordar mi usuario
                </label>
            </div>
            <div>
                <button type="submit">Entrar</button>
            </div>
        </form>
    </main>
</body>
</html>