<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Sex Shop</title>
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>
    <header>
        <h1>Checkout</h1>
    </header>
    <main>
        <section id="order-summary">
            <h2>Resumen de Pedido</h2>
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

            $sql = "SELECT * FROM tb_productos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>';

                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <td>' . $row['nombre'] . '</td>
                            <td>$' . $row['precio'] . '</td>
                            <td>' . $row['cantidad'] . '</td>
                            <td>$' . $row['total'] . '</td>
                        </tr>';
                }

                echo '</tbody></table>';
            } else {
                echo "No hay productos en el carrito.";
            }

            $conn->close();
            ?>
        </section>
        <section id="payment-methods">
            <h2>Métodos de Pago</h2>
            <form id="payment-form">
                <input type="radio" id="cash" name="payment_method" value="cash" checked>
                <label for="cash">Envío a domicilio y pago en efectivo</label><br>
                <input type="radio" id="card" name="payment_method" value="card">
                <label for="card">Tarjeta de débito</label><br><br>
                <button type="submit">Seleccionar método de pago</button>
            </form>
            <form action="cancel_checkout.php" method="POST">
                <button type="submit">Cancelar Compra</button>
            </form>
        </section>

        <!-- Ventana emergente para envío a domicilio -->
        <div id="cash-modal" class="modal">
            <div class="modal-content">
                <span class="close" id="close-cash-modal">&times;</span>
                <h3>Información de Envío</h3>
                <form id="cash-form" method="POST" action="process_payment.php" class="modal-form">
                    <input type="hidden" name="payment-method" value="cash">
                    <label for="first-name">Nombre:</label>
                    <input type="text" id="first-name" name="first-name" required>
                    <label for="last-name">Apellido:</label>
                    <input type="text" id="last-name" name="last-name" required>
                    <label for="country">País:</label>
                    <input type="text" id="country" name="country" required>
                    <label for="city">Ciudad:</label>
                    <input type="text" id="city" name="city" required>
                    <label for="address">Dirección:</label>
                    <input type="text" id="address" name="address" required>
                    <label for="id-number">Número de Cédula:</label>
                    <input type="text" id="id-number" name="id-number" required>
                    <label for="phone-number">Número de Teléfono:</label>
                    <input type="text" id="phone-number" name="phone-number" required>
                    <button type="submit">Confirmar Envío</button>
                </form>
            </div>
        </div>

        <!-- Ventana emergente para pago con tarjeta -->
        <div id="card-modal" class="modal">
            <div class="modal-content">
                <span class="close" id="close-card-modal">&times;</span>
                <h3>Información de Pago con Tarjeta</h3>
                <form id="card-form" method="POST" action="process_payment.php" class="modal-form">
                    <input type="hidden" name="payment-method" value="card">
                    <label for="card-name">Nombre en la Tarjeta:</label>
                    <input type="text" id="card-name" name="card-name" required>
                    <label for="card-number">Número de Tarjeta:</label>
                    <input type="text" id="card-number" name="card-number" required>
                    <label for="card-expiry">Fecha de Expiración:</label>
                    <input type="text" id="card-expiry" name="card-expiry" placeholder="MM/AA" required>
                    <label for="card-cvc">CVC:</label>
                    <input type="text" id="card-cvc" name="card-cvc" required>
                    <button type="submit">Confirmar Pago</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Sex Shop. Todos los derechos reservados.</p>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cashModal = document.getElementById('cash-modal');
            const cardModal = document.getElementById('card-modal');
            const closeCashModal = document.getElementById('close-cash-modal');
            const closeCardModal = document.getElementById('close-card-modal');
            const paymentForm = document.getElementById('payment-form');

            paymentForm.addEventListener('submit', (e) => {
                const paymentMethod = document.querySelector('input[name="payment_method"]:checked').value;

                if (paymentMethod === 'cash') {
                    e.preventDefault(); // Evita que el formulario se envíe inmediatamente
                    cashModal.style.display = 'block';
                } else if (paymentMethod === 'card') {
                    e.preventDefault(); // Evita que el formulario se envíe inmediatamente
                    cardModal.style.display = 'block';
                }
            });

            closeCashModal.addEventListener('click', () => {
                cashModal.style.display = 'none';
            });

            closeCardModal.addEventListener('click', () => {
                cardModal.style.display = 'none';
            });

            window.addEventListener('click', (e) => {
                if (e.target === cashModal) {
                    cashModal.style.display = 'none';
                } else if (e.target === cardModal) {
                    cardModal.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
