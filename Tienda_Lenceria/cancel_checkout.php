<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_lenceria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Eliminar todos los productos de la tabla tb_productos
$sql = "DELETE FROM tb_productos";

if ($conn->query($sql) === TRUE) {
    // Redirigir a la página tienda.php
    header("Location: tienda.php"); // Redirige a tienda.php
    exit(); // Asegúrate de llamar a `exit()` después de la redirección
} else {
    echo "Error al cancelar la compra: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
