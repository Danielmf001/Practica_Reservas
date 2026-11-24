<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Salas disponibles - AulaReservas</title>
<style>
  body { margin: 0; font-family: Arial, sans-serif; color: #222; background: #fff; }
  header { background: #0f3b4c; color: #fff; padding: 12px 16px; display: flex; justify-content: space-between; align-items: center; }
  header strong { font-size: 18px; }
  header a { color: #fff; }
  nav { background: #dff0f2; padding: 10px 16px; border-bottom: 1px solid #b9d9dd; }
  nav a { color: #0b7285; font-weight: bold; text-decoration: none; margin-right: 8px; }
  main { max-width: 700px; padding: 16px 24px; font-family: "Courier New", monospace; }
  form { margin-bottom: 24px; }
  label { margin-right: 12px; }
  table { border-collapse: collapse; width: 100%; }
  td { padding: 4px 10px 4px 0; }
  .no { color: #777; }
  .aviso { color: #b00020; }
</style>
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