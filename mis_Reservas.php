<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mis reservas - AulaReservas</title>
<style>
  body { margin: 0; font-family: Arial, sans-serif; color: #222; background: #fff; }
  header { background: #0f3b4c; color: #fff; padding: 12px 16px; display: flex; justify-content: space-between; align-items: center; }
  header strong { font-size: 18px; }
  header a { color: #fff; }
  nav { background: #dff0f2; padding: 10px 16px; border-bottom: 1px solid #b9d9dd; }
  nav a { color: #0b7285; font-weight: bold; text-decoration: none; margin-right: 8px; }
  main { max-width: 800px; padding: 16px 24px; font-family: "Courier New", monospace; }
  .mensaje { margin: 16px 0; }
  table { border-collapse: collapse; width: 100%; }
  th { text-align: left; }
  th, td { padding: 4px 12px 4px 0; }
  form { margin: 0; }
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
  <a href="mis_reservas.php">Mis reservas</a>
</nav>

<main>
  <h2>Mis reservas</h2>

  <!-- Filtro por GET -->
  <p>
    <a href="mis_reservas.php?ver=proximas"><button type="button">Próximas</button></a>
    <a href="mis_reservas.php?ver=todas"><button type="button">Todas</button></a>
  </p>

  <p class="mensaje">Mensaje: «Reserva creada: Sala Norte, 18/11/2026, 16:00-17:00».</p>

  <table>
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Horario</th>
        <th>Sala</th>
        <th>Motivo</th>
        <th>Estado</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>18/11/26</td>
        <td>16-17 h</td>
        <td>Sala Norte</td>
        <td>Trabajo</td>
        <td>Activa</td>
        <td>
          <form method="post" action="cancelar_reserva.php">
            <input type="hidden" name="id" value="1">
            <button type="submit">Cancelar</button>
          </form>
        </td>
      </tr>
      <tr>
        <td>20/11/26</td>
        <td>10-12 h</td>
        <td>Aula 2</td>
        <td>Estudio</td>
        <td>Activa</td>
        <td>
          <form method="post" action="cancelar_reserva.php">
            <input type="hidden" name="id" value="2">
            <button type="submit">Cancelar</button>
          </form>
        </td>
      </tr>
      <tr>
        <td>19/11/26</td>
        <td>09-10 h</td>
        <td>Sala de estudio</td>
        <td>Repaso</td>
        <td>Cancelada</td>
        <td>–</td>
      </tr>
      <tr>
        <td>05/11/26</td>
        <td>14-15 h</td>
        <td>Sala Norte</td>
        <td>Reunión</td>
        <td>Finalizada</td>
        <td>–</td>
      </tr>
    </tbody>
  </table>

  <!-- Si no hay reservas, mostrar esto en lugar de la tabla -->
  <!-- <p>No tienes reservas.</p> -->
</main>

</body>
</html>