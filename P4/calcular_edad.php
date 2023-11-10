<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Edad</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Resultado de Edad</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fecha_nacimiento = $_POST["fecha_nacimiento"];

            // Obtener la fecha actual
            $fecha_actual = new DateTime();
            
            // Convertir la fecha de nacimiento a objeto DateTime
            $fecha_nacimiento_obj = new DateTime($fecha_nacimiento);

            // Calcular la diferencia en años
            $diferencia = $fecha_actual->diff($fecha_nacimiento_obj);
            $edad = $diferencia->y;

            echo "<p>Su edad es $edad años.</p>";

            // Comparar la edad y mostrar el mensaje correspondiente
            if ($edad < 18) {
                echo "<p>No es mayor de edad.</p>";
            } else {
                echo "<p>Es mayor de edad.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
