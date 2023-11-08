<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>FRINKS BUSINESS/Home</title>
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
                    <li><a href="OurTeamBussines.php">OUR_TEAM</a></li>
                    <li><a href="service.php">OUR_SERVICE</a></li>
                    <li><a href="contact.php">CONTACT_US</a></li>
                </ul>
            </div>
            <div>
                <button class="btn1"><a href="logout.php">Logout</a></button>
            </div>
            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"><button class="btn">Search</button></a>
            </div>
        </div> 
        <div class="content">
            <h1><span>WELCOME</span><br>TO<br><span>FRINKS</span><br>ONLINE<br><span>SHOP</span></h1>
            <p class="par">"Keep Your Friends Close And Your Frinks Closer"</p>

                <button class="cn"><a href="shopnow.html">SHOP NOW</a></button>
        </div>
    </div>
</body>
</html>