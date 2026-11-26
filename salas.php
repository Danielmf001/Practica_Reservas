<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Salas disponibles - AulaReservas</title>
</head>
<body>

<header>
  <strong>AulaReservas</strong>
  <span>Sesión: ana · <a href="login.php">Cerrar sesión</a></span>
</header>

<nav>
  <a href="index.php">Inicio</a> |
  <a href="salas.php">Salas disponibles</a> |
  <a href="mis_Reservas.php">Mis reservas</a>
</nav>

<main>
  <h2>Salas disponibles</h2>

  <!-- Filtros por GET: los criterios quedan en la URL -->
  <form method="get" action="salas.php">
    <p>
      <label>Fecha: <input type="date" name="fecha" value="2026-11-18"></label>
      <label>Inicio: <input type="time" name="hora" value="16:00"></label>
      <label>Duración:
        <select name="duracion">
          <option value="1" selected>1 hora</option>
          <option value="2">2 horas</option>
          <option value="3">3 horas</option>
        </select>
      </label>
    </p>
    <p>
      <label>Capacidad mínima: <input type="number" name="capacidad" value="2" min="1" style="width:50px"></label>
      <button type="submit">Buscar</button>
    </p>
  </form>

  <h3>Resultados para la franja consultada</h3>

  <table>
    <tr>
      <td>Sala Norte</td>
      <td>8 plazas</td>
      <td>Proyector, pizarra</td>
      <td><a href="reservar.php?sala=1&fecha=2026-11-18&hora=16:00&duracion=1">Reservar</a></td>
    </tr>
    <tr>
      <td>Sala de estudio</td>
      <td>4 plazas</td>
      <td>Pizarra</td>
      <td><a href="reservar.php?sala=2&fecha=2026-11-18&hora=16:00&duracion=1">Reservar</a></td>
    </tr>
    <tr class="no">
      <td>Aula 2</td>
      <td>20 plazas</td>
      <td>Proyector</td>
      <td>No disponible</td>
    </tr>
  </table>

  <p><a href="index.php"><button type="button">Volver al inicio</button></a></p>
</main>

</body>
</html>