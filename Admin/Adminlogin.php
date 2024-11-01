<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpage</title>
    <style>
        .pagecontent{
    padding:10px;
    z-index: 1; 
            position: relative;
            background: rgba(255, 255, 255, 0.5);  
            width: 400px;
            margin: auto;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            border-radius: 10px;
        }
   .background_image {
            background-image: url("Adminbackgroundimage3.jpg");
            background-size: cover;
            background-position: center; 
            height: 100vh; 
            position: absolute;
            width: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }
   .labels{
    border-radius: 10px;
    padding:10px;
    margin:10px;
   }
    </style>
    <script>
        function validateForm() {
           var adminname = document.getElementById('adminname').value;
            var password = document.getElementById('password').value;

            var adminnamePattern = /^[a-zA-Z0-9]+$/;
            if (adminname.length < 5 || adminname.length > 15 || !adminnamePattern.test(adminname)) {
                alert('adminname must be 5-15 characters long and contain only alphanumeric characters.');
                return false;
            }

           if (password.length < 6) {
                alert('Password must be at least 6 characters long.');
                return false;
            }

            return true;
        }
    </script>
    <link rel="stylesheet" type="text/css" link="Cssfolder/Login.css">
</head>
<body>
   <div class="background_image">
   <div class="pagecontent">
    <form action="Register.php" method="post" target="blank">
        <label for="Adminname">Admin Name:</label>
        <input type="text" id="adminname"  name="adminname" id="adminname"  required minlength="5" maxlength="15" pattern="^[a-zA-Z0-9]+$" placeholder="Enter the admin name" class="labels"><br>
        <label>Password:</label>
        <input type="text" id="password"required 
 placeholder="enter the password" class="labels"><br>
<button type="submit">Submit</button>
<div class="message">
               <?php
               if (isset($_GET['error'])) {
                   echo htmlspecialchars($_GET['error']);
               }
               ?>
           </div>
</form>
   </div>
</body>
</html>