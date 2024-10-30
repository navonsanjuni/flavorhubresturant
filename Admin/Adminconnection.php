<?php
session_start();

$host = "localhost";
$user = "root";        
$password = "";        
$dbname = "admin_db";  

$conn = new mysqli($host, $user, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];

    // Prepare and execute query to get the admin details
    $stmt = $conn->prepare("SELECT * FROM admins WHERE adminname = ?");
    $stmt->bind_param("s", $adminname);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if admin exists
    if ($result->num_rows > 0) {
        // Fetch the admin record
        $admin = $result->fetch_assoc();
        $hashed_password = $admin['password'];  // Password stored in the database (hashed)

        // Verify password
        if (hash('sha256', $password) === $hashed_password) {
            // Successful login
            $_SESSION['adminname'] = $adminname;
            echo "Login successful! Welcome, " . htmlspecialchars($adminname);
            // Redirect to the admin dashboard or other secure page
            header("Location: admin_dashboard.php");
        } else {
            // Incorrect password
            header("Location: login.php?error=Incorrect password");
        }
    } else {
        // Admin not found
        header("Location: login.php?error=Admin not found");
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
