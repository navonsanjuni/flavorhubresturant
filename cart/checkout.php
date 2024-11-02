<?php
include "../connect.php"

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .delivery-info, .order-summary {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .order-summary {
            float: right;
            width: 30%;
        }
        .delivery-info {
            width: 65%;
            float: left;
        }
        .row {
            display: flex;
            justify-content: space-between;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .button {
            padding: 10px 20px;
            background-color: #ff6600;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #e65500;
        }
        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="checkout.php">
            <div class="delivery-info">
                <h2>Delivery Information</h2>
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="button">Proceed to Pay</button>
                </div>
            </div>

            <div class="order-summary">
    <h2>Order Summary</h2>
    <div id="order-summary-items">
        <!-- JavaScript will inject the cart items here -->
    </div>
    <div class="summary-item">
        <strong>Total:</strong>
        <span id="total-price">Rs. 0</span>
    </div>
</div>
<script>
    function updateOrderSummary() {
        const checkboxes = document.querySelectorAll('.cart-checkbox');
        let total = 0;

        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                const price = parseFloat(checkbox.getAttribute('data-price'));
                const quantityInput = checkbox.closest('.cart-item').querySelector('.quantity-input');
                const quantity = parseInt(quantityInput.value) || 1;
                total += price * quantity;
            }
        });

        // Update total price in the order summary
        document.getElementById('total-price').textContent = 'Rs. ' + total.toFixed(2);
    }

    // Attach event listeners to checkboxes
    document.querySelectorAll('.cart-checkbox').forEach((checkbox) => {
        checkbox.addEventListener('change', updateOrderSummary);
    });

    // Attach event listeners to quantity buttons to also trigger order summary update
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
            updateOrderSummary();
        });
    });

    // Call the function initially to set the order summary
    updateOrderSummary();
</script>


            <div class="clear"></div>
        </form>
    </div>





<?php
// Assuming a connection to the database is already established
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    // Create an order
    $query = "INSERT INTO Orders (user_id, total_price, delivery_address) VALUES (1, 0, '$address, $city')";
    if (mysqli_query($conn, $query)) {
        $order_id = mysqli_insert_id($conn);

        // Insert items into OrderItems based on selected cart items
        // Example loop assuming cart items are fetched from the database
        $cart_query = "SELECT * FROM Cart WHERE user_id = 1 AND is_selected = 1";
        $result = mysqli_query($conn, $cart_query);
        $total_price = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $item_id = $row['item_id'];
            $quantity = $row['quantity'];
            $item_price = 100; // Fetch actual price from Items table
            $total_price += $item_price * $quantity;

            // Add to OrderItems
            $order_item_query = "INSERT INTO OrderItems (order_id, item_id, quantity, price) VALUES ($order_id, $item_id, $quantity, $item_price)";
            mysqli_query($conn, $order_item_query);
        }

        // Update total price in Orders table
        $update_order_query = "UPDATE Orders SET total_price = $total_price WHERE id = $order_id";
        mysqli_query($conn, $update_order_query);

        // Redirect to confirmation page
        header("Location: order_confirmation.php?order_id=$order_id");
    }
}
?>

</body>
</html>
