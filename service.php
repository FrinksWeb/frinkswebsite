<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:service.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Linking CSS File index.css -->

    <link rel="stylesheet" href="service.css">

    <title>Our Services</title>
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
                    <li><a href="shopnow.php">OUR_PRODUCT</a></li>
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
    <div class="container-fluid">
        <img src="2pexels-photo-1267315.webp" alt="" width="0" height="400">
        <h1 class="text-center mt-5 display-3 fw-bold"><span class="theme-text">Our Services</span></h1>
        <hr class="mx-auto mb-5 w-25">
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="web.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Web Development:</h3>
                        <hr class="mx-auto w-75">
                        <p>Web Development is a dynamic field that requires continuous learning and adaptation to evolving technologies and user expectations. Whether you're building a personal blog or a complex web application, web development is a crucial aspect of establishing a strong online presence.</p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="app.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">App Development:</h3>
                        <hr class="mx-auto w-75">
                        <p>Apps Development our Remember that app development can be complex, and it's essential to adapt to changing technologies and user expectations. Consider seeking professional assistance if needed.</p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="dm.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Digital Marketing:</h3>
                        <hr class="mx-auto w-75">
                        <p>Digital Marketing is dynamic and ever-evolving, so staying up to date with the latest trends, tools, and best practices is essential for success. The right digital marketing strategy can help your business reach a broader audience, increase brand awareness, and ultimately drive growth and revenue.</p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="seo.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Email Marketing:</h3>
                        <hr class="mx-auto w-75">
                        <p>Email Marketing Build an email list and send regular newsletters with product updates, promotions, and drink-related content.Use personalized recommendations based on customer preferences.</p>                             
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</body>

</html>