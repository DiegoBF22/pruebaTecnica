<!DOCTYPE html>
<html lang="es">

<head>
    <title>Listado de Equipos</title>
</head>

<body>
    <h1>Listado de equipos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Deporte</th>
                <th>Fecha de Fundación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($equipos)): ?>
                <?php foreach ($equipos as $equipo): ?>
                    <tr>
                        <td><?= htmlspecialchars($equipo['id']) ?></td>
                        <td><?= htmlspecialchars($equipo['nombre']) ?></td>
                        <td><?= htmlspecialchars($equipo['ciudad'] ?? '-') ?></td>
                        <td><?= htmlspecialchars($equipo['deporte'] ?? '-') ?></td>
                        <td><?= htmlspecialchars($equipo['fundacion'] ?? '-') ?></td>
                        <td><?= htmlspecialchars($equipo['estado'] ?? '-') ?></td>
                        <td><?= htmlspecialchars($equipo['historia'] ?? '-') ?></td>
                        <td>
                            <a href="index.php?action=mostrar&id=<?= $equipo['id'] ?>">Ver detalles</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No hay equipos registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <p><a href="index.php?action=crear">Crear un nuevo equipo</a></p>

</body>

</html>