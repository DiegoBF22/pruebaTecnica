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
    <?php else: ?>
        <p>El equipo no existe o no se pudo encontrar.</p>
    <?php endif; ?>

</body>

</html>