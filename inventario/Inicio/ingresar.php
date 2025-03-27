<?php
$servename = "localhost:3306";
$database = "inventario";
$username = "root";
$password = "";


$conn = mysqli_connect($servename, $username, $password, $database);

if (!$conn) {
  die("Error: No se pudo conectar a la base de datos" . mysqli_connect_error());
}

// Recibir datos del formulario
$cantidad = $_POST["cantidad"];
$operador = $_POST["operador"];
$salida = $_POST["salida"];
$nombre = $_POST["nombre"];
$area = $_POST["area"];


// Validar datos (opcional)

// Crear consulta SQL
$sql = "INSERT INTO reporte (cantidad,operador,salida,nombre,area) VALUES ('$cantidad', '$operador', '$salida', '$nombre', '$area')";

// Ejecutar consulta SQL
if (mysqli_query($conn, $sql)) {
  echo '<script>
    alert("Datos insertados correctamente");
    window.location.href="../Inicio/reporte.php";
    </script>';
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
