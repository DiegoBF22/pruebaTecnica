<!DOCTYPE html>
<html lang="es">

<head>
    <title>Crear Equipo</title>
</head>

<body>
    <h1>Creación de un equipo</h1>
    <form action="index.php?action=crear" method="post">

        <label for="nombre">Nombre del equipo:</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="ciudad">Ciudad del equipo:</label>
        <input type="text" id="ciudad" name="ciudad"><br>

        <label for="deporte">Deporte:</label>
        <select id="deporte" name="deporte">
            <option value="Fútbol">Fútbol</option>
            <option value="Baloncesto">Baloncesto</option>
            <option value="Balonmano">Balonmano</option>
            <option value="Gimnasia">Gimnasia</option>
        </select><br>

        <label for="fundacion">Fundación del equipo:</label>
        <input type="date" id="fundacion" name="fundacion"><br>

        <label for="estado">Estado del equipo:</label>
        <select id="estado" name="estado">
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
            <option value="bancarrota">Bancarrota</option>
        </select><br>

        <label for="historia">Historia del equipo:</label>
        <input type="text" id="historia" name="historia"><br>

        <button type="submit">Crear equipo</button>
    </form>
</body>

</html>