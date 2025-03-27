<?php
$correo = $_POST['correo'];
$clave = $_POST['clave'];

session_start();
$_SESSION['correo'] = $correo;

$conn = mysqli_connect("localhost:3306", "root", "", "inventario");

if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

$stmt = mysqli_prepare($conn, "SELECT * FROM usuario WHERE correo = ? AND clave = ?");

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ss", $correo, $clave);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (!$resultado) {
        echo "Error al ejecutar la consulta: " . mysqli_stmt_error($stmt);
    } else {
        $filas = mysqli_num_rows($resultado);

        if ($filas) {
            header("location:../inventario/inicio/index.php");
        } else {
            echo '<script type="text/javascript">'; echo 'alert("Acceso inválido. Por favor, inténtelo otra vez.")'; echo '</script>';
            ?>
            <?php
            include("login.php");
            
        }

        mysqli_free_result($resultado);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conn);
}

mysqli_close($conn);
?>