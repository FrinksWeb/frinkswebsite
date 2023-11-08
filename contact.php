<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:contact.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>FRINKS BUSINESS/Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="bussines1.css">
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
                    <li><a href="user_page.html">HOME</a></li>
                    <li><a href="OurTeamBussines.html">OUR_TEAM</a></li>
                    <li><a href="service.html">OUR_SERVICE</a></li>
                </ul>
            </div>
            <div>
                <button class="btn1"><a href="logout.html">Logout</a></button>
            </div>
            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"><button class="btn">Search</button></a>
            </div>
        </div>
            <section class="contact">
                <div class="content">
                    <h2>Contact Us</h2>
                    <p> This The Frinks Contact </p>
                </div>
                <div class="container">
                    <div class="contactInfo">
                        <div class="box">
                            <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Address</h3>
                                <p>Purok 9-B, San Isidro Puro,<br>Legazpi City, Albay,<br>4500</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Phone</h3>
                                <p>+63 951-932-2295</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Email</h3>
                                <p>johnraffbelaza@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="contactForm">
                        <form>
                            <h2><a href="https://johnraffbelaza%40gmail.com">Send Message</a></h2>
                            <div class="inputBox">
                                <input type="text" name="" required="required">
                                <span>Full Name</span>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="" required="required">
                                <span>Email</span>
                            </div>
                            <div class="inputBox">
                                <textarea required="required"></textarea>
                                <span>Type your Message...</span>
                            </div>
                            <div class="inputBox">
                                <input type="submit" name="" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div> 
    </div>
</body>
</html>