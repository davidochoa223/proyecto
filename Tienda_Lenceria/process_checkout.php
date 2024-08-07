<?php
header('Content-Type: application/json');

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_lenceria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener los datos del carrito
$data = json_decode(file_get_contents('php://input'), true);

// Insertar cada producto en la base de datos
foreach ($data as $item) {
    $name = $conn->real_escape_string($item['name']);
    $price = $conn->real_escape_string($item['price']);
    $quantity = $conn->real_escape_string($item['quantity']);
    $total = $price * $quantity;

    $sql = "INSERT INTO tb_productos (nombre, precio, cantidad, total) VALUES ('$name', '$price', '$quantity', '$total')";
    if (!$conn->query($sql)) {
        echo json_encode(['error' => $conn->error]);
        exit;
    }
}

$conn->close();
echo json_encode(['success' => true]);
?>
