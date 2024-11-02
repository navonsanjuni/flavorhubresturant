<?php
include "../connect.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email =  $_POST['email'];
    $password =  $_POST['password'];

    // Check if the admin exists
    $sql = "SELECT * FROM admin WHERE  email = '$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_id'] = $row['admin_id'];
            $_SESSION['admin_name'] = $row['name'];
            header("Location: admin_dashboard.php");
            exit;
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "Admin not found!";
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
</head>
<body>
    <form method="POST" action="">
        <h2>Admin Login</h2>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
        <p> I don't have an account <a href="admin_register.php">Sign up</a></p>
    </form>
</body>
</html>
