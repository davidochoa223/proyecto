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

// Obtener datos del formulario
$payment_method = $_POST['payment-method'];
$order_date = date('Y-m-d H:i:s'); // Fecha y hora actual

// Información de la compra
if ($payment_method == 'cash') {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $id_number = $_POST['id-number'];
    $phone_number = $_POST['phone-number'];

    // Insertar información en la base de datos
    $sql = "INSERT INTO orders (payment_method, first_name, last_name, country, city, address, id_number, phone_number, order_date)
            VALUES ('$payment_method', '$first_name', '$last_name', '$country', '$city', '$address', '$id_number', '$phone_number', '$order_date')";

} else if ($payment_method == 'card') {
    $card_name = $_POST['card-name'];
    $card_number = $_POST['card-number'];
    $card_expiry = $_POST['card-expiry'];
    $card_cvc = $_POST['card-cvc'];

    // Insertar información en la base de datos
    $sql = "INSERT INTO orders (payment_method, card_name, card_number, card_expiry, card_cvc, order_date)
            VALUES ('$payment_method', '$card_name', '$card_number', '$card_expiry', '$card_cvc', '$order_date')";
}

if ($conn->query($sql) === TRUE) {
    echo "Pago procesado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
