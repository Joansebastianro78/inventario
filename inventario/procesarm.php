<?php
$servername = "localhost:3306";
$database = "inventario";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener el dato de la tabla origen
    $stmt = $conn->prepare("select * from entradamovi where id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row_origen = $result->fetch_assoc();


    // Insertar el dato en la tabla destino con la fecha actual
    $fecha_actual = date("Y-m-d"); // Formato de fecha: año-mes-día
    if (!empty($row_origen['iccid'])) {
        $stmt = $conn->prepare("insert into salidam (iccid, fecha_nac) values (?, ?)");
        $stmt->bind_param("ss",$row_origen['iccid'], $fecha_actual); // Convertir iccid a entero si es necesario
        if ($stmt->execute()) {
            echo '<script>
            alert("La salida de la Sim Card hay sido exitosa");
            window.location.href="./inicio/entradavoda.php";
            </script>';
            
        } else {
            echo "Error al insertar datos: " . $stmt->error;
        }
        $stmt->close(); // Cierra la sentencia después de usarla
    } else {
        echo "iccid es nulo para ID: " . $id;
    }
}
// header("location:../inventario/inicio/entradavoda.php");


$conn->close();
?>
