<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Conexión</title>
</head>
<body>
    <h1>Prueba de conexión a PostgreSQL</h1>
    <?php
        include_once("conexion.php");
        $objetoConexion = new CConexion();
        $conn = $objetoConexion->ConexionBD();
        if ($conn) {
            echo "<p>La conexión a la base de datos fue exitosa.</p>";
        } else {
            echo "<p>No se pudo establecer la conexión.</p>";
        }
    ?>
</body>
</html>
