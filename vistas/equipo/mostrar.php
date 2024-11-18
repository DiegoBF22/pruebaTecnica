<!DOCTYPE html>
<html lang="es">

<head>
    <title>Mostrar Equipo</title>
</head>

<body>
    <h1>Mostrar un equipo</h1>
    <?php if (!empty($equipo)): ?>
        <p>ID: <?= htmlspecialchars($equipo['id']) ?></p>
        <p>Nombre: <?= htmlspecialchars($equipo['nombre']) ?></p>
        <p>Ciudad: <?= htmlspecialchars($equipo['ciudad'] ?? '-') ?></p>
        <p>Deporte: <?= htmlspecialchars($equipo['deporte'] ?? '-') ?></p>
        <p>Fecha de Fundación: <?= htmlspecialchars($equipo['fundacion'] ?? '-') ?></p>
        <p>Estado: <?= htmlspecialchars($equipo['estado']) ?></p>
        <p>Historia: <?= htmlspecialchars($equipo['historia']) ?></p>

        <h3>Jugadores</h3>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Número</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($jugadores as $jugador): ?>
                <tr>
                    <td><?= $jugador['nombre'] ?></td>
                    <td><?= $jugador['numero'] ?></td>
                    <td>
                        <a href="index.php?action=editarJugador&id=<?= $jugador['id'] ?>&idEquipo=<?= $equipo['id'] ?>">Editar</a>
                        <a href="index.php?action=eliminarJugador&id=<?= $jugador['id'] ?>&idEquipo=<?= $equipo['id'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="index.php?action=agregarJugador&idEquipo=<?= $equipo['id'] ?>">Inscribir un nuevo jugador</a>

    <?php else: ?>
        <p>El equipo no existe o no se pudo encontrar.</p>
    <?php endif; ?>


    <p><a href="index.php">Volver al listado de equipos</a></p>

</body>

</html>