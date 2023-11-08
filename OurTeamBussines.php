<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:OurTeamBussines.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive team section</title>
	<link rel="stylesheet" type="text/css" href="OurTeamBussines.css">

	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                    <li><a href="shopnow.php">OUR_PRODUCT</a></li>
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
	<section class="team">
		<div class="center">
			<h1>Our Team</h1>
		</div>

		<div class="team-content">
			<div class="box">
				<img src="raff.jpg">
				<h3>John Raff Belaza</h3>
				<h5>Owner</h5>
				<div class="icons">
					<a href="#"><i class="ri-twitter-fill"></i></a>
					<a href="https://www.facebook.com/johnraff.belaza"><i class="ri-facebook-box-fill"></i></a>
					<a href="#"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>

			<div class="box">
				<img src="cristel.jpg">
				<h3>Kristel Redoquill Lorena</h3>
				<h5>Manager</h5>
				<div class="icons">
					<a href="#"><i class="ri-twitter-fill"></i></a>
					<a href="#"><i class="ri-facebook-box-fill"></i></a>
					<a href="#"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>

			<div class="box">
				<img src="jovit.jpg">
				<h3>Jovith Artiaga</h3>
				<h5>Assistant Manager</h5>
				<div class="icons">
					<a href="#"><i class="ri-twitter-fill"></i></a>
					<a href="#"><i class="ri-facebook-box-fill"></i></a>
					<a href="#"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>

			<div class="box">
				<img src="mark.jpg">
				<h3>Mark Anthon Mina</h3>
				<h5>Staff</h5>
				<div class="icons">
					<a href="#"><i class="ri-twitter-fill"></i></a>
					<a href="#"><i class="ri-facebook-box-fill"></i></a>
					<a href="#"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>
            
            <div class="box">
				<img src="steve.jpg">
				<h3>Steven Tero</h3>
				<h5>Staff</h5>
				<div class="icons">
					<a href="#"><i class="ri-twitter-fill"></i></a>
					<a href="#"><i class="ri-facebook-box-fill"></i></a>
					<a href="#"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>

            <div class="box">
				<img src="trish.jpg">
				<h3>Trishia Lei Millare</h3>
				<h5>Staff</h5>
				<div class="icons">
					<a href="#"><i class="ri-twitter-fill"></i></a>
					<a href="#"><i class="ri-facebook-box-fill"></i></a>
					<a href="#"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>

            <div class="box">
				<img src="gabriel.jpg">
				<h3>Gabriel Eric Principe</h3>
				<h5>Staff</h5>
				<div class="icons">
					<a href="#"><i class="ri-twitter-fill"></i></a>
					<a href="#"><i class="ri-facebook-box-fill"></i></a>
					<a href="#"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>
            
			<div class="box">
				<img src="armin.jpg">
				<h3>Armin Bermillo</h3>
				<h5>Staff</h5>
				<div class="icons">
					<a href="#"><i class="ri-twitter-fill"></i></a>
					<a href="#"><i class="ri-facebook-box-fill"></i></a>
					<a href="#"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>
            
			<div class="box">
				<img src="bert.jpg">
				<h3> jobert Mando</h3>
				<h5>Staff</h5>
				<div class="icons">
					<a href="#"><i class="ri-twitter-fill"></i></a>
					<a href="#"><i class="ri-facebook-box-fill"></i></a>
					<a href="#"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>

		</div>
	</section>

</body>
</html>