<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:shopnow.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>FRINKS BUSINESS/SHOP NOW</title>
    <link rel="stylesheet" href="bussines.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">FRINKS</h2>
                <img class="logo1" src="frinkslogo1.jpg">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="user_page.php">HOME</a></li>
                    <li><a href="OurTeamBussines.php">OUR_TEAM</a></li>
                    <li><a href="service.php">OUR_SERVICE</a></li>
                    <li><a href="contact.php">CONTACT_US</a></li>
                </ul>
            </div>
            <div class="search">
                <button class="btn"><a href="logout.php">Logout</a></button>
            </div>
            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>
        </div>
            <div class="content">
            <h1><span>WE<br></span<br>OUR<br><span>FRINKS</span><br>SHOP</h1>
            <p class="par">"At FRINKS, we are passionate about delivering delicious and nutritious meals straight to your doorstep. We believe that food should not only be nourishing but also enjoyable. That's why we carefully source the freshest ingredients, ensuring that each dish is bursting with flavor and goodness.
Our dedication to quality extends beyond just the ingredients. When you choose FRINKS, you can trust that you're supporting a local business that values sustainability. By reducing food waste and embracing responsible practices, we aim to create a positive change in the food industry.
r<br>But more than just being a food business, we are a community. We are grateful for the trust and support of our loyal customers who have embraced our vision. Your feedback and suggestions inspire us to continuously improve and expand our menu offerings.<br>Thank you for joining us on this delicious journey. We invite you to explore our menu, place an order, and experience the convenience and joy of having fresh, flavorful meals delivered right to your doorstep. Bon appetite!"</p>
            </div>
        </div>
    </div>
                 <!--MENU-->
    <section class="Menu-div">
        <h1>MENU</h1>
        <img src="Buko-Juice.jpg">
        <p>Buko-Juice<br>Buko juice is a popular, refreshing drink from the Philippines. “Buko” is a Filipino word 
            that means “young coconut”. Buko juice is also known as coconut milk drink. There are two 
            ways to prepare buko juice: using fresh juice from the coconut fruit and using canned buko juice 
            concentrate.</p>
        <h2>Price: Php 35.00</h2>
        <img src="blue-lemonade.jpg">
        <p>Blue Lemonade<br>Blue Lemonade is a drink made from lemon juice, sugar syrop, and water or from carbonated 
            water, citric acid, etc</p>
        <h2>Price: Php 60.00</h2>
        <img src="french-fries.jpg">
        <p>French Fries<br>Fries are elongated pieces and thinly cut fried potatoes with different flavours (cheese, 
            regular, and spicy). It is served hot and crispy.</p>
        <h2>Price: Php 50.00</h2>
        <img src="Hotdog.jpg">
        <p>Hotdog<br>Hotdog is a red cheesedog made from hefty meat stuffed with delicious cheese bit.<br>Cheese Sticks is a deep-fried snack composed of sliced cheeses wrapped in spring roll 
            wrapper.</p>
        <h2>Price: Php 20.00</h2>
        <img src="cheesestick.jpg">
        <p>Cheese Stick<br>Cheese Sticks is a deep-fried snack composed of sliced cheeses wrapped in spring roll 
            wrapper.</p>
        <h2>Price: Php 15.00</h2>
        <img src="friedshomai.jpg">
        <p>Fried Siomai<br>Fried Siomai is a Filipino term for steamed Chinese dumplings that are usually filled with 
        pork, occasionally shrimp.</p>
        <h2>Price: Php 20.00</h2>
        <img src="Amorsolo.jpg">
        <p>Amorsolo<br>Fries (Sour Cream, Cheese) + Hotdogs + Drinks (Blue Lemonade, Buko)</p>
        <h2>Price: Php 160.00</h2>
        <img src="Tolentino.jpg">
        <p>Tolentino<br>Fries (Sour Cream, Cheese) + Cheese Stick + Hotdogs + Drinks (Blue Lemonade, Buko)</p>
        <h2>Price: Php 135.00</h2>
        <img src="Nakpil.jpg">
        <p>Principe<br>Fries (Sour Cream, Cheese) + Hotdogs + Drinks (Blue Lemonade, Buko)</p>
        <h2>Price: Php 80.00</h2>
        <img src="Avellana.jpg">
        <p>Avellana<br>Fries (Sour Cream, Cheese) + Siomai + Drinks (Blue Lemonade, Buko)</p>
        <h2>Price: Php 100.00</h2>
        <img src="De La Rama.jpg">
        <p>De La Rama<br>Fries (Sour Cream, Cheese) + Fried Siomai + Hotdogs + Cheese Sticks + Drinks (Blue Lemonade, Buko Juice)</p>
        <h2>Price: Php 170.00</h2>
        <img src="charish.png">
        <p>Chicken Burger<br> A burger is a patty of ground Chicken grilled and placed between two halves of a bun. Slices of raw onion, lettuce, bacon, mayonnaise, and other ingredients add flavor + Drinks (Blue Lemonade, Buko Juice)</p>
        <h2>Price: Php 180.00</h2>
        <img src="Regular Burger.png">
        <p> Beef Burger<br> A burger is a patty of ground beef grilled and placed between two halves of a bun. Slices of raw onion, lettuce, tomato and garlic mayo, bacon, mayonnaise, and other ingredients add flavor + Drinks (Blue Lemonade, Buko Juice)</p>
        <h2>Price: Php 190.00</h2>
</section>
        </div>
    </div>
</body>
</html>