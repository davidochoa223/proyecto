<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sex Shop - Página Principal</title>
    <link rel="stylesheet" href="css/tienda.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Sex Shop</h1>
            <p class="slogan">Elegancia y seducción en cada detalle</p>
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#informacion">Información</a></li>
                    <li><a href="#productos-hombre">Productos Hombre</a></li>
                    <li><a href="#productos-mujer">Productos Mujer</a></li>
                    <li><a href="#conjuntos-mujer">Conjuntos Mujer</a></li>
                    <li><a href="#combos-hombres">Combos Hombres</a></li>
                </ul>
            </nav>
            <div class="cart">
                <a id="cart-icon" href="#">🛒</a> <!-- Carrito de compras -->
            </div>
        </div>
    </header>
    <main>
        <!-- Sección de Lencería Mujer -->
        <section id="productos-mujer">
            <h2>Lencería para Mujer</h2>
            <div class="product-container">
                <div class="product">
                    <img src="img/lenceriamujer1.jpg" alt="Lencería Mujer 1">
                    <p class="price">$29.99</p>
                    <p class="description">Descripción breve del producto 1.</p>
                    <button class="add-to-cart" data-name="Lencería Mujer 1" data-price="29.99" data-img="img/lenceriamujer1.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/lenceriamujer2.jpg" alt="Lencería Mujer 2">
                    <p class="price">$34.99</p>
                    <p class="description">Descripción breve del producto 2.</p>
                    <button class="add-to-cart" data-name="Lencería Mujer 2" data-price="34.99" data-img="img/lenceriamujer2.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/lenceriamujer3.jpg" alt="Lencería Mujer 3">
                    <p class="price">$27.99</p>
                    <p class="description">Descripción breve del producto 3.</p>
                    <button class="add-to-cart" data-name="Lencería Mujer 3" data-price="27.99" data-img="img/lenceriamujer3.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/lenceriamujer4.jpg" alt="Lencería Mujer 4">
                    <p class="price">$32.99</p>
                    <p class="description">Descripción breve del producto 4.</p>
                    <button class="add-to-cart" data-name="Lencería Mujer 4" data-price="32.99" data-img="img/lenceriamujer4.jpg">Añadir al carrito</button>
                </div>
            </div>
        </section>

        <!-- Sección de Lencería Hombre -->
        <section id="productos-hombre">
            <h2>Lencería para Hombre</h2>
            <div class="product-container">
                <div class="product">
                    <img src="img/lenceriahombre1.jpg" alt="Lencería Hombre 1">
                    <p class="price">$25.99</p>
                    <p class="description">Descripción breve del producto 1.</p>
                    <button class="add-to-cart" data-name="Lencería Hombre 1" data-price="25.99" data-img="img/lenceriahombre1.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/lenceriahombre2.jpg" alt="Lencería Hombre 2">
                    <p class="price">$29.99</p>
                    <p class="description">Descripción breve del producto 2.</p>
                    <button class="add-to-cart" data-name="Lencería Hombre 2" data-price="29.99" data-img="img/lenceriahombre2.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/lenceriahombre3.jpg" alt="Lencería Hombre 3">
                    <p class="price">$22.99</p>
                    <p class="description">Descripción breve del producto 3.</p>
                    <button class="add-to-cart" data-name="Lencería Hombre 3" data-price="22.99" data-img="img/lenceriahombre3.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/lenceriahombre4.jpg" alt="Lencería Hombre 4">
                    <p class="price">$30.99</p>
                    <p class="description">Descripción breve del producto 4.</p>
                    <button class="add-to-cart" data-name="Lencería Hombre 4" data-price="30.99" data-img="img/lenceriahombre4.jpg">Añadir al carrito</button>
                </div>
            </div>
        </section>

        <!-- Sección de Conjuntos Mujer -->
        <section id="conjuntos-mujer">
            <h2>Conjuntos para Mujer</h2>
            <div class="product-container">
                <div class="product">
                    <img src="img/conjuntomujer1.jpg" alt="Conjunto Mujer 1">
                    <p class="price">$49.99</p>
                    <p class="description">Descripción breve del conjunto 1.</p>
                    <button class="add-to-cart" data-name="Conjunto Mujer 1" data-price="49.99" data-img="img/conjuntomujer1.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/conjuntomujer2.jpg" alt="Conjunto Mujer 2">
                    <p class="price">$54.99</p>
                    <p class="description">Descripción breve del conjunto 2.</p>
                    <button class="add-to-cart" data-name="Conjunto Mujer 2" data-price="54.99" data-img="img/conjuntomujer2.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/conjuntomujer3.jpg" alt="Conjunto Mujer 3">
                    <p class="price">$47.99</p>
                    <p class="description">Descripción breve del conjunto 3.</p>
                    <button class="add-to-cart" data-name="Conjunto Mujer 3" data-price="47.99" data-img="img/conjuntomujer3.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/conjuntomujer4.jpg" alt="Conjunto Mujer 4">
                    <p class="price">$52.99</p>
                    <p class="description">Descripción breve del conjunto 4.</p>
                    <button class="add-to-cart" data-name="Conjunto Mujer 4" data-price="52.99" data-img="img/conjuntomujer4.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/conjuntomujer5.jpg" alt="Conjunto Mujer 5">
                    <p class="price">$59.99</p>
                    <p class="description">Descripción breve del conjunto 5.</p>
                    <button class="add-to-cart" data-name="Conjunto Mujer 5" data-price="59.99" data-img="img/conjuntomujer5.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/conjuntomujer6.jpg" alt="Conjunto Mujer 6">
                    <p class="price">$64.99</p>
                    <p class="description">Descripción breve del conjunto 6.</p>
                    <button class="add-to-cart" data-name="Conjunto Mujer 6" data-price="64.99" data-img="img/conjuntomujer6.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/conjuntomujer7.jpg" alt="Conjunto Mujer 7">
                    <p class="price">$68.99</p>
                    <p class="description">Descripción breve del conjunto 7.</p>
                    <button class="add-to-cart" data-name="Conjunto Mujer 7" data-price="68.99" data-img="img/conjuntomujer7.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/conjuntomujer8.jpg" alt="Conjunto Mujer 8">
                    <p class="price">$72.99</p>
                    <p class="description">Descripción breve del conjunto 8.</p>
                    <button class="add-to-cart" data-name="Conjunto Mujer 8" data-price="72.99" data-img="img/conjuntomujer8.jpg">Añadir al carrito</button>
                </div>
            </div>
        </section>

        <!-- Sección de Combos Hombres -->
        <section id="combos-hombres">
            <h2>Combos para Hombre</h2>
            <div class="product-container">
                <div class="product">
                    <img src="img/combohombre1.jpg" alt="Combo Hombre 1">
                    <p class="price">$74.99</p>
                    <p class="description">Descripción breve del combo 1.</p>
                    <button class="add-to-cart" data-name="Combo Hombre 1" data-price="74.99" data-img="img/combohombre1.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/combohombre2.jpg" alt="Combo Hombre 2">
                    <p class="price">$79.99</p>
                    <p class="description">Descripción breve del combo 2.</p>
                    <button class="add-to-cart" data-name="Combo Hombre 2" data-price="79.99" data-img="img/combohombre2.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/combohombre3.jpg" alt="Combo Hombre 3">
                    <p class="price">$69.99</p>
                    <p class="description">Descripción breve del combo 3.</p>
                    <button class="add-to-cart" data-name="Combo Hombre 3" data-price="69.99" data-img="img/combohombre3.jpg">Añadir al carrito</button>
                </div>
                <div class="product">
                    <img src="img/combohombre4.jpg" alt="Combo Hombre 4">
                    <p class="price">$84.99</p>
                    <p class="description">Descripción breve del combo 4.</p>
                    <button class="add-to-cart" data-name="Combo Hombre 4" data-price="84.99" data-img="img/combohombre4.jpg">Añadir al carrito</button>
                </div>
            </div>
        </section>

       <!-- Sección de Información -->
<section id="informacion">
    <h2>Información</h2>
    <div class="social-container">
        <a href="https://www.facebook.com/Sex_Shop01" class="social-icon" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
        </a>
        <a href="https://www.instagram.com/sexyShop_1" class="social-icon" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
        </a>
    </div>
</section>


    </main>
    <footer>
        <p>&copy; 2024 Sex Shop. Todos los derechos reservados.</p>
    </footer>

<!-- Modal del carrito -->
<div id="cart-modal" class="cart-modal">
    <div class="cart-modal-content">
        <span id="close-modal" class="close">&times;</span>
        <h2>Carrito de Compras</h2>
        <div class="cart-items-container" id="cart-items">
            <!-- Los productos del carrito se agregarán aquí dinámicamente -->
        </div>
        <button id="empty-cart">Vaciar carrito</button>
        <button id="checkout">Metodo de pago</button>
    </div>
</div>



    <script src="js/tienda.js"></script>
</body>
</html>
