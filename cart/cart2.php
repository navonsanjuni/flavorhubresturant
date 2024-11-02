

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Online Restaurant</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="home.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    color: #333;
}

.header-bar {
    background-color: #ff6f00;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo {
    width: 100px;
}

.search-bar {
    width: 300px;
    padding: 5px;
}

.container {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

.cart-wrapper {
    width: 70%;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
}

.cart-item {
    display: flex;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
}

.item-image {
    width: 80px;
    height: 80px;
    margin-right: 10px;
}

.item-details {
    width: 50%;
}

.item-price {
    color: #ff6f00;
    font-weight: bold;
}

.original-price {
    text-decoration: line-through;
    color: #999;
}

.quantity-controls {
    display: flex;
    align-items: center;
}

.quantity-btn {
    padding: 5px;
    border: none;
    background-color: #ff6f00;
    color: white;
    cursor: pointer;
}

.quantity-input {
    width: 40px;
    text-align: center;
    margin: 0 5px;
}

.remove-btn {
    background-color: transparent;
    border: none;
    color: #999;
    cursor: pointer;
}

.summary {
    width: 25%;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
}

.apply-btn, .checkout-btn {
    width: 100%;
    padding: 10px;
    background-color: #ff6f00;
    color: white;
    border: none;
    cursor: pointer;
    margin-top: 10px;
}

header {
  position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; /* Ensures it stays on top of other elements */
    background-color: rgb(114, 28, 28); /* Ensure it has a background to make it clear */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: Adds a slight shadow */

}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 80%;
  margin: 0 auto;
}

.logo img {
  height: 60px;
}

.nav-links {
  list-style: none;
  display: flex;
  margin: 0;
  padding: 0;
}

.nav-links li {
  margin: 0 15px;
}

.nav-links a {
  text-decoration: none;
  color: white;
  font-weight: bold;
  font-size: 16px;
  transition: color 0.3s ease;
}

.nav-links a:hover {
  color: #ffd700; /* Secondary accent color */
}

.header-icons {
  display: flex;
  align-items: center;
}

.header-icons .icon-link {
  margin-left: 15px;
  color: white;
  font-size: 20px;
  transition: color 0.3s ease;
}

.header-icons .icon-link:hover {
  color: #ffd700; /* Secondary accent color */
}

.header-icons .icon-link i {
  cursor: pointer;
}

</style>
</head>
<body>
<header>
    <nav class="navbar">
        <div class="logo">
            <a href="index.html">
                <img src="../images/logo111.jpg" alt="Website Logo">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="menu.html">Food Menu</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="cart/cart_dashbord.php"><i class="fas fa-shopping-cart"></i> Cart</a></li>
            <li><a href="onlineOrder.php">Order Online</a></li>
        </ul>
        <div class="header-icons">
            <a href="profile.html" class="icon-link"><i class="fas fa-user-circle"></i></a>
            <a href="cart/cart_dashbord.php" class="icon-link"><i class="fas fa-shopping-cart"></i></a>
            <a href="notifications.html" class="icon-link"><i class="fas fa-bell"></i></a>
        </div>
    </nav>
</header>
<div class="container">
    <div class="cart-wrapper">
        <h2>SELECT ALL (2 ITEM(S))</h2>
        <div class="cart-item">
            <input type="checkbox" class="cart-checkbox" data-price="2600">
            <img src="item1.jpg" alt="Item Image" class="item-image">
            <div class="item-details">
                <h3>Wireless Airpod Pro 2nd Generation</h3>
                <p>No Brand, Color Family: Not Specified</p>
                <p>Ends at Oct 24 23:59:59</p>
                <p class="item-price">Rs. 2,600 <span class="original-price">Rs. 11,500</span></p>
            </div>
            <div class="quantity-controls">
                <button class="quantity-btn">-</button>
                <input type="text" value="1" class="quantity-input">
                <button class="quantity-btn">+</button>
            </div>
            <div class="item-actions">
                <button class="remove-btn">Remove</button>
            </div>
        </div>
        <div class="cart-item">
            <input type="checkbox" class="cart-checkbox" data-price="539">
            <img src="item2.jpg" alt="Item Image" class="item-image">
            <div class="item-details">
                <h3>Women Fashion Watch</h3>
                <p>No Brand, Color: Khaki</p>
                <p>Ends at Oct 24 23:59:59</p>
                <p class="item-price">Rs. 539 <span class="original-price">Rs. 1,796</span></p>
            </div>
            <div class="quantity-controls">
                <button class="quantity-btn">-</button>
                <input type="text" value="1" class="quantity-input">
                <button class="quantity-btn">+</button>
            </div>
            <div class="item-actions">
                <button class="remove-btn">Remove</button>
            </div>
        </div>
    </div>
    <div class="summary">
        <h3>Order Summary</h3>
        <p>Subtotal (<span id="selected-items-count">0</span> items): Rs. <span id="subtotal">0.00</span></p>
        <p>Shipping Fee: Rs. 0</p>
        <input type="text" placeholder="Enter Voucher Code">
        <button class="apply-btn">Apply</button>
        <a href="checkout.php"><button class="checkout-btn">Proceed to Checkout</button></a>
    </div>
</div>

<script>
    // Function to calculate and update the subtotal
    function updateSubtotal() {
        const checkboxes = document.querySelectorAll('.cart-checkbox');
        let subtotal = 0;
        let itemCount = 0;

        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                const price = parseFloat(checkbox.getAttribute('data-price'));
                const quantityInput = checkbox.closest('.cart-item').querySelector('.quantity-input');
                const quantity = parseInt(quantityInput.value) || 1;
                subtotal += price * quantity;
                itemCount += 1;
            }
        });

        // Update the subtotal and item count in the HTML
        document.getElementById('subtotal').textContent = subtotal.toFixed(2);
        document.getElementById('selected-items-count').textContent = itemCount;
    }

    // Attach event listeners to checkboxes
    document.querySelectorAll('.cart-checkbox').forEach((checkbox) => {
        checkbox.addEventListener('change', updateSubtotal);
    });

    // Attach event listeners to quantity buttons
    document.querySelectorAll('.quantity-btn').forEach((button) => {
        button.addEventListener('click', function() {
            const input = this.parentElement.querySelector('.quantity-input');
            let currentQuantity = parseInt(input.value) || 1;

            if (this.textContent === "+") {
                currentQuantity++;
            } else if (this.textContent === "-" && currentQuantity > 1) {
                currentQuantity--;
            }

            input.value = currentQuantity;
            updateSubtotal();
        });
    });
</script>
</body>
</html>




