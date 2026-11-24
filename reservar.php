<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AulaReservas - Crear reserva</title>
</head>
<body>
    <header>
        <span>AulaReservas</span>
        <span>Sesión: ana</span> | 
        <a href="login.php">Cerrar sesión</a>
        <nav>
            <a href="index.php">Inicio</a> | 
            <a href="salas.php">Salas disponibles</a> | 
            <a href="mis_reservas.php">Mis reservas</a>
        </nav>
    </header>

    <main>
        <h1>Nueva reserva</h1>

        <!-- Mensaje de error (si procede) -->
        <!-- <p style="color: red;">La sala ya está reservada en ese horario.</p> -->

        <form action="reservar.php" method="POST">
            <div>
                <label for="sala">Sala:</label>
                <select id="sala" name="sala">
                    <option value="norte">Sala Norte</option>
                    <option value="estudio">Sala de estudio</option>
                    <option value="aula2">Aula 2</option>
                    <option value="taller">Sala taller</option>
                    <option value="silencio">Sala de silencio</option>
                </select>
            </div>
            <div>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" value="2026-11-18">
            </div>
            <div>
                <label for="hora_inicio">Hora de inicio:</label>
                <input type="time" id="hora_inicio" name="hora_inicio" value="16:00">
            </div>
            <div>
                <label for="duracion">Duración:</label>
                <select id="duracion" name="duracion">
                    <option value="1">1 hora</option>
                    <option value="2">2 horas</option>
                    <option value="3">3 horas</option>
                </select>
            </div>
            <div>
                <label for="motivo">Motivo:</label>
                <input type="text" id="motivo" name="motivo" maxlength="100" required>
            </div>
            <div>
                <button type="submit">Confirmar reserva</button>
                <a href="salas.php">Cancelar</a>
            </div>
        </form>
    </main>
</body>
</html>