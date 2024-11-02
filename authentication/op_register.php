<?php
// Include database connection
include '../connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];

    // Check if the username already exists
    $checkUserQuery = "SELECT * FROM operator WHERE name = '$name'";
    $result = mysqli_query($con, $checkUserQuery);

    if (mysqli_num_rows($result) > 0) {
        // Username already exists
        echo "Username already exists!";
    } else {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $sql = "INSERT INTO operator (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

        if (mysqli_query($con, $sql)) {
            echo "Registration successful!";
            header("Location:op_loging.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }

    // Close the database connection
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="op_register.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <main>
    <form action="HomePage.php" method="post" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email"><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required><br><br>

        
        <input type="submit" value="Register">
    </form>
    </main>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="index.html">
                    <img src="../images/logo new.jpg" alt="Website Logo">
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="menu.html">Food Menu</a></li>
               
                <li><a href="contact.html">Contact</a></li>
                <li><a href="cart/cart_dashbord.php">Cart</a></li>
                <li><a href="onlineOrder.php" >Order Online</a></li>
                <li><a href=""></a></li>
            </ul>
        </nav>
    </header>
   
    <script>
    function validateEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    if (emailPattern.test(email)) {
        return true;
    } else {
        alert("Please enter a valid email address.");
        return false;
    }
} 



    function validateForm() {
        let name = document.getElementById("name").value;
        let password = document.getElementById("password").value;
        let email = document.getElementById("email").value;
        
        if (name == "") {
            alert("Name must be filled out.");
            return false;
        }
        if (!validateEmail(email)) {
        return false; // Stop form submission if email is invalid
    }

        
        if (password == "") {
            alert("Password must be filled out.");
            return false;
        }
        
        if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            return false;
        }
        

        return true; // Submit form if validation passes
    } 
</script>

<a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
<ion-icon name="chevron-up"></ion-icon>
</a>

<?php
  include "footer.php";
?>
<a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
<ion-icon name="chevron-up"></ion-icon>
</a>



</body>
</html>
