<!DOCTYPE html>
<html lang="es">

<head>
    <title>Crear Equipo</title>
</head>

<body>
    <h1>Editar un jugador</h1>
    <br>
    <form method="POST" action="">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $jugador['nombre'] ?>" required>
        <br>
        <label>Número:</label>
        <input type="number" name="numero" value="<?= $jugador['numero'] ?>" required>
        <br>
        <label>Equipo:</label>
        <input type="number" name="idEquipo" value="<?= $jugador['idEquipo'] ?>" required>
        <br>
        <label>Es capitán? (1=sí | 0=no):</label>
        <input type="number" name="capitan" value="<?= $jugador['capitan'] ?>">
        <br>
        <button type="submit">Actualizar</button>
    </form>


</body>

</html>