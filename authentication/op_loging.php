<?php
// Include database connection
include '../connect.php';

// Start session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Fetch user data from the database
    $sql = "SELECT * FROM operator WHERE name = '$name'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Verify the password
        if (password_verify($password, $row['password'])) {
           if($row['approved']==1){
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['name'] = $row['name'];
            header("location:../operator/op_dashbord.php");
            exit();

           }else{
            header("location:notapproved.php");
           }
          
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Invalid email or password.";
    }

    // Close the database connection
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Operator Login</title>
    <link rel="stylesheet" href="op_loging.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
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
   
    <main>
   
    <form action="op_loging.php" method="post" onsubmit="return validateForm()">
        
        <label for="name">Username:</label>
        <input type="text" placeholder="Enter your name" id="name" name="name" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" placeholder="Enter your password" id="password" name="password" required><br><br>
    
        
        <input type="submit" value="Login">
    </form>
</main>

    <script>
    function validateForm() {
        let name = document.getElementById("name").value;
        let password = document.getElementById("password").value;
        
        if (username == "") {
            alert("Name must be filled out.");
            return false;
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



</body>
</html>
