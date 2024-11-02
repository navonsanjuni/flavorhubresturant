<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aboutus.css">
   <link rel="stylesheet" href="footer.css">        
</head>
<body>  
<header>
        <nav class="navbar">
            <div class="logo">
                <a href="index.html">
                    <img src="images/logo new.jpg"
                     alt="Website Logo">
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
    <div class="animated-background"> 
  <h1 id="animated-text">Driven by Passion</h1>
</div> 
<script>
const images = [
  'images/about.jpg',
  'images/about2.jpg',
  'images/about3.webp'
];

const texts = [
  "Driven by Passion",
  "Experience the Best",
  "Where Food Meets Art"
];

let currentIndex = 0;
const backgroundElement = document.querySelector('.animated-background');
const textElement = document.getElementById('animated-text');

function changeBackground() {
  // Change background image
  backgroundElement.style.backgroundImage = `url(${images[currentIndex]})`;

  // Change text content
  textElement.textContent = texts[currentIndex];

  // Add fade-in effect for text
  textElement.classList.add("fade-in");

  // Remove the fade-in effect after animation ends
  setTimeout(() => {
    textElement.classList.remove("fade-in");
  }, 1000); // Duration of the text fade animation (1 second)

  // Increment the index, resetting if at the end
  currentIndex = (currentIndex + 1) % images.length;
}

// Initial call to display the first image and text
changeBackground();

// Set an interval to change the background every 5 seconds
setInterval(changeBackground, 5000);

</script>
<div class="about-container">
  <h3 class="about-heading">FlavorHub RESTAURANT COMPLEX NEGOMBO BEACH, SRI LANKA</h3>
  <h1 class="welcome-text">AYUBOWAN | VANAKKAM | WELCOME</h1>
  <p class="about-description">
    A very warm welcome to Flavorhub  in Negombo. Celebrating our 20th year Anniversary we take great pride in Our Contemporary Uniqueness, attention to small details and being different from our competition. We are an extremely busy Restaurant Complex and famous worldwide through Trip Advisor and other Travel Guides, because we do care about our quality policy and customers.
  </p>
  
  <!-- Social Media Icons -->
  <div class="social-icons">
    <a href="#"><img src="images/SocialImages/Facebook.png" alt="Facebook"></a>
    <a href="#"><img src="images/SocialImages/Instagram.png" alt="Instragram"></a>
    <a href="#"><img src="images/SocialImages/X.png" alt="Twitter"></a>
    <a href="#"><img src="images/SocialImages/YouTube.png" alt="Youtube"></a>
   
  </div>
  <section class="about-section">
    <div class="container ">
        <h1>A SMILE GOES A LONG WAY..</h1>
        <div class="content-container">
            <div class="content-box">
                <h2>OUR PASSION</h2>
                <p>Driven by Passion, the Flavorhub Team have been carefully selected and trained to value Our customers and always try to provide a personal and professional service. Through Our Passion in what we do makes us different and show Our customers we do really care about your experiences with us. Our food is created with Passion and Love and delivered from the heart.</p>
            </div>
            <div class="content-box">
                <h2>OUR DEDICATION</h2>
                <p>We are a team of 45 professional people who are dedicated to put a smile on your face and give you a magical experience to provide you with lasting impressions of your experience at Flavorhub Restaurant Complex in Negombo and Sri Lanka forever.</p>
            </div>
        </div>
    </div>
    </div>
  </section>
    <section class="team-section">
    <h1 class="team-heading">MEET OUR TEAM</h1>
    <div class="team-container">
        <div class="team-member">
            <img src="images/5.jpg" alt="Martin - Our Colourful Owner">
            <p class="team-caption">Martin – Our Colourful Owner</p>
        </div>
        <div class="team-member">
            <img src="1.jpg" alt="Nimesha - General Manager">
            <p class="team-caption">Nimesha – General Manager</p>
        </div>
        <div class="team-member">
            <img src="images/2.jpg" alt="Chef Dinesha - Executive Chef">
            <p class="team-caption">Chef Dinesha – Executive Chef</p>
        </div>
        <div class="team-member">
            <img src="images/3.jpg" alt="Chef Dinesh - Kitchen Manager">
            <p class="team-caption">Chef Dinesh – Kitchen Manager</p>
        </div>
        <div class="team-member">
            <img src="images/4.jpg" alt=" Dilum -Food & Beverage Manager ">
            <p class="team-caption">Chef Dilum – Food & Beverage Manager</p>
        </div>
        <div class="team-member">
            <img src="images/6.jpg" alt="Chef Dilani -  Kitchen Supervisor">
            <p class="team-caption">Chef Dilani – Kitchen Supervisor</p>
        </div>
        <div class="team-member">
            <img src="images/7.jpg" alt="Thanujan – Food & Beverage Supervisor">
            <p class="team-caption"> Thanujan – Kitchen Supervisor</p>
        </div>
        <div class="team-member">
            <img src="images/8.jpg" alt="Ajith – Food & Beverage Supervisor">
            <p class="team-caption">Ajith – Food & Beverage Supervisor</p>
        </div>
        
         
    </div>
</section>

<section class="restaurant-info">
    <h1 class="restaurant-info-heading">GET TO KNOW ABOUT FLAVOEHUB RESTAURANT</h1>
    <div class="info-container">
        <div class="info-item">
            <img src="images/our customers.png" alt="Our Customers Icon" class="info-icon">
            <h2 class="info-title">OUR CUSTOMERS</h2>
            <p class="info-text">Every customer has different tastes, special requirements, and needs. We are aware that small details do matter and with your communication to our Lords Team and Managers, we will attempt to make you feel special and you leave with perfect memories.</p>
        </div>
        <div class="info-item">
            <img src="images/our service.png" alt="Our Service Icon" class="info-icon">
            <h2 class="info-title">OUR SERVICE</h2>
            <p class="info-text">Our Service is designed to be professional, informal but personal. We wish every visitor to Flavorhub Restaurant Complex to feel like they are entering their home as personal guests.</p>
        </div>
        <div class="info-item">
            <img src="images/our standard.png" alt="Our Standard Icon" class="info-icon">
            <h2 class="info-title">OUR STANDARD</h2>
            <p class="info-text">We go to extreme measures to maintain a very high standard of Health and Hygiene throughout all departments to ensure customer satisfaction and safety at all times.</p>
        </div>
        <div class="info-item">
            <img src="images/our values.png" alt="Our Values Icon" class="info-icon">
            <h2 class="info-title">OUR VALUES</h2>
            <p class="info-text">Our values are built around providing excellent service and maintaining trust with all our stakeholders to ensure long-term relationships.</p>
        </div>
    </div>
    
</section>
<div class=" container11">
    <div class="box">
        <h2>Our Vision</h2>
        <p>We take our responsibility as an investor in Sri Lanka very seriously. Our goal is to positively impact the lives of Sri Lankan people and animals by respecting all cultures, ethnic groups, and religions, and promoting harmony.</p>
        <p>We have been actively involved in animal welfare, providing vaccinations, sterilization, feeding programs, and medical support to stray animals since 2020.</p>
        <p>Our vision is to educate the community on respecting animals and ensuring a humane environment for all.</p>
    </div>
    <div class="box">
        <h2>Mission Statement</h2>
        <p>To promote our contemporary uniqueness and provide a unique experience for clients, employees, suppliers, and communities. We aim to help Sri Lanka grow sustainably by respecting its culture and promoting responsible tourism.</p>
        <p>We are dedicated to giving back to the communities we work with, striving to make a long-term difference in the lives of Sri Lankan people and animals.</p>
    </div>
    <div class="box">
        <h2>Our Responsibility</h2>
        <p>We prioritize training and developing our team to help them achieve their goals and improve their quality of life. Our commitment includes providing fair salaries and good working conditions to support their families.</p>
        <p>We also respect our suppliers and strive to form strong partnerships that benefit the community, fostering growth and stability.</p>
    </div>
    <div class="box">
        <h2>Our Uniqueness</h2><p>  our uniqueness lies in our dedication to combining business with community upliftment. We go beyond conventional practices by integrating cultural respect and environmental sustainability into our core operations. This approach enables us to contribute meaningfully to the communities we serve while staying committed to ethical business growth.</p>
        <p>We believe in creating lasting memories for our clients through personalized experiences and extraordinary service. Our innovative approach helps us stand out, ensuring every interaction with us is meaningful and positively impacts both people and the environment.</p>
    </div>
    
    <div class="box">
        <h2>Our Policies</h2>
        <p>Our policies are designed to ensure transparency, integrity, and sustainability. We maintain strict quality standards across all aspects of our business to uphold our commitment to excellence. Employee empowerment is central to our policies, promoting professional growth, fair treatment, and inclusivity.</p>
        <p>We also prioritize environmental responsibility, implementing eco-friendly practices to reduce our carbon footprint. Our partnerships are built on trust, and we work to foster long-term relationships with clients, employees, and suppliers by following ethical business practices.</p>
    </div>
        <div class="box">
        <h2>Our Charges</h2>
        <p>We provide competitive and fair pricing to ensure our services are accessible without compromising on quality. Our charges reflect the value we deliver, encompassing high standards of service, quality ingredients, and careful attention to detail in every aspect of our work.</p>
        <p>Additionally, we offer customized packages to meet the specific needs of our clients. Our transparent pricing policy ensures no hidden fees, and we are always open to discussing options that fit both the client’s requirements and our commitment to value.</p>
        </div>
</div>
</div>


<?php
  include 'footer.php';
 
?>








<a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
<ion-icon name="chevron-up"></ion-icon>
</a>
</body>
</html>