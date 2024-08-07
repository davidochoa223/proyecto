<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_lenceria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener el método de pago
$paymentMethod = $_POST['payment-method'];

if ($paymentMethod === 'cash') {
    // Datos del formulario de efectivo
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $idNumber = $_POST['id-number'];
    $phoneNumber = $_POST['phone-number'];

    // Insertar datos del pedido en la base de datos
    $sql = "INSERT INTO tb_orders (first_name, last_name, country, city, address, id_number, phone_number)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $firstName, $lastName, $country, $city, $address, $idNumber, $phoneNumber);

    if ($stmt->execute()) {
        // Eliminar productos del carrito
        $deleteCartSql = "DELETE FROM tb_productos";
        $conn->query($deleteCartSql);

        // Redirigir a la página principal
        header("Location: tienda.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
} elseif ($paymentMethod === 'card') {
    // Datos del formulario de tarjeta
    $cardName = $_POST['card-name'];
    $cardNumber = $_POST['card-number'];
    $cardExpiry = $_POST['card-expiry'];
    $cardCvc = $_POST['card-cvc'];

    // Insertar datos del pedido en la base de datos
    $sql = "INSERT INTO tb_tarjet (card_name, card_number, card_expiry, card_cvc)
            VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $cardName, $cardNumber, $cardExpiry, $cardCvc);

    if ($stmt->execute()) {
        // Eliminar productos del carrito
        $deleteCartSql = "DELETE FROM tb_productos";
        $conn->query($deleteCartSql);

        // Redirigir a la página principal
        header("Location: tienda.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
