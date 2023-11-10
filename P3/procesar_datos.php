<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Usuario</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Datos del Usuario</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $nombre = $_GET["nombre"];
            $apellido = $_GET["apellido"];
            $cedula = $_GET["cedula"];

            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Apellido:</strong> $apellido</p>";
            echo "<p><strong>Número de Cédula:</strong> $cedula</p>";
        }
        ?>
    </div>
</body>
</html>
