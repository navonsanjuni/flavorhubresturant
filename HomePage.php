<?php
include "connect.php";

$sql = "SELECT * FROM menu_items";
$result = mysqli_query($con,$sql);
$item_list = array();

while($row=mysqli_fetch_assoc($result)){
    array_push($item_list,$row);
}

$sql_categories = "SELECT DISTINCT * FROM menu_items";
$result_categories = mysqli_query($con, $sql_categories);
$categories = array();

while($row = mysqli_fetch_assoc($result_categories)) {
    array_push($categories, $row);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="home.css">
     <title>Restaurant</title>
     <link rel="stylesheet" href="footer.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     </head>


</head>
<body>
   <header>
        <nav class="navbar">
            <div class="logo">
                <a href="index.html">
                    <img src="images\restLogo.png" alt="Website Logo">
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li class="dropdown">
                       <a href="menu.php">Food Menu</a>
                       <ul class="dropdown-content">
                   <?php foreach($categories as $category): ?>
            <li><a href="menu.php?id=<?php echo ($category['id']  ); ?>"><?php echo ($category['title'] ); ?></a></li>
        <?php endforeach; ?>
    </ul>
</li>

                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart/cart2.php"><i class="fas fa-shopping-cart"></i> Cart</a></li>
                <li><a href="onlineOrder.php">Order Online</a></li>
            </ul>
            <div class="header-icons">
                <a href="profile.php" class="icon-link"><i class="fas fa-user-circle"></i></a>
                <a href="cart/cart2.php" class="icon-link"><i class="fas fa-shopping-cart"></i></a>
                <a href="notifications.html" class="icon-link"><i class="fas fa-bell"></i></a>
            </div>
        </nav>
    </header>

    <section class="hero">
    <img src="https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?cs=srgb&dl=pexels-chanwalrus-941861.jpg&fm=jpg" alt="food ordering image" class="animated-image">
        <h1>Welcome to FlavorHub</h1> <h2>Delicious food, delivered to your door</h2>
        <p>Your favorite meals delivered to your door</p>
    </section>
   

    <h2 class="menu-title">
        Our Top Combos
    </h2>
    
    <div class="menu">
    <?php
    if (count($item_list)> 0) {

        foreach($item_list as $item){
            echo '<div class="menu-item">';
            echo '<img src="'   . $item["image_url"] . '" alt="' . $item["title"] . '">';
            echo '<h3>' . $item["title"] . '</h3>';
            echo '<p>' . $item["description"] . '</p><br>';
            echo '<a href="itemdesplay.php?menu_id='.$item['id'].'"><button class="btn-1">' . $item["button_text"] . '</button></a>';
            echo '</div>';
        }
        
       
    } else {
        echo "No menu items found.";
    }

    $con->close();
    ?>
</div>

<div class="section-container">
    <div class="image-container">
        <img src="https://cdn.britannica.com/02/239402-050-ACC075DB/plates-of-vegan-foods-ready-serve-restaurant-London.jpg" alt="Delicious Food" >
    </div>
    <div class="content-container">
        <h2>Why People Choose Us</h2>
        <ul>
            <li>Fresh and high-quality ingredients.</li>
            <li>Quick and reliable delivery.</li>
            <li>Variety of cuisines to choose from.</li>
            <li>Easy and convenient online ordering.</li>
            <li>Affordable prices and special deals.</li>
        </ul>
    </div>
</div>


<?php
  require "footer.php";
?>




<!-- 
- #BACK TO TOP
-->

<a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
<ion-icon name="chevron-up"></ion-icon>
</a>



</body>
</html>