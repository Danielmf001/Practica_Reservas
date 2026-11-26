<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mis reservas - AulaReservas</title>
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