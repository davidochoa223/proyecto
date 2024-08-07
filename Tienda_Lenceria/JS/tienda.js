document.addEventListener('DOMContentLoaded', () => {
    const cart = [];
    const cartIcon = document.getElementById('cart-icon');
    const cartModal = document.getElementById('cart-modal');
    const closeModal = document.getElementById('close-modal');
    const cartItems = document.getElementById('cart-items');
    const emptyCartButton = document.getElementById('empty-cart');
    const checkoutButton = document.getElementById('checkout');

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const name = button.getAttribute('data-name');
            const price = parseFloat(button.getAttribute('data-price'));
            const img = button.getAttribute('data-img');

            const existingItem = cart.find(item => item.name === name);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ name, price, img, quantity: 1 });
            }

            updateCart();
        });
    });

    cartIcon.addEventListener('click', () => {
        cartModal.style.display = 'flex';
    });

    closeModal.addEventListener('click', () => {
        cartModal.style.display = 'none';
    });

    emptyCartButton.addEventListener('click', () => {
        cart.length = 0;
        updateCart();
    });

    checkoutButton.addEventListener('click', () => {
        // Enviar los datos del carrito al servidor para guardarlos en la base de datos
        fetch('process_checkout.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(cart)
        })
        .then(response => response.json())
        .then(data => {
            // Redirige al usuario a la página de checkout
            window.location.href = 'checkout.php';
        })
        .catch(error => console.error('Error:', error));
        
        cart.length = 0;
        updateCart();
    });

    function updateCart() {
        cartItems.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;

            cartItems.innerHTML += `
                <div class="cart-item">
                    <img src="${item.img}" alt="${item.name}">
                    <div class="item-details">
                        <p>${item.name}</p>
                        <p>Precio: $${item.price.toFixed(2)}</p>
                        <p>Cantidad: ${item.quantity}</p>
                        <p>Total: $${itemTotal.toFixed(2)}</p>
                        <button class="remove-item" data-name="${item.name}">Eliminar</button>
                    </div>
                </div>
            `;
        });

        const removeButtons = document.querySelectorAll('.remove-item');
        removeButtons.forEach(button => {
            button.addEventListener('click', () => {
                const name = button.getAttribute('data-name');
                const index = cart.findIndex(item => item.name === name);
                if (index > -1) {
                    cart.splice(index, 1);
                    updateCart();
                }
            });
        });
    }
});
