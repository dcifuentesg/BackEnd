<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Datos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Consulta de Datos</h1>
        <?php
        include("conexion.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $filtro = $_POST["filtro"];


            $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE nombre LIKE :filtro OR apellido LIKE :filtro OR cedula = :filtro");
            $consulta->bindParam(":filtro", $filtro);
            $consulta->execute();

            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Cédula</th></tr>";
            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>{$fila['id']}</td><td>{$fila['nombre']}</td><td>{$fila['apellido']}</td><td>{$fila['cedula']}</td></tr>";
            }
            echo "</table>";
        }
        ?>

        <form action="consultar_datos.php" method="post">
            <label for="filtro">Filtrar por:</label>
            <input type="text" name="filtro" required>

            <input type="submit" value="Consultar">
        </form>
    </div>
</body>
</html>
