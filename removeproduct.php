<?php


require_once('database.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<header class="header">
    <div class="site-logo">
        <img src="images/site-logo-2.png" alt="">
    </div>
    <div class="site-navigation">
        <ul class="site-navs">
            <li class="navs"><a href="index.php">Home</a></li>
            <li class="navs"><a href="search.php">Search</a></li>
            <li class="navs"><a href="about.php">About Us</a></li>
            <li class="navs"><a href="products.php">Products</a></li>
            <li class="navs"><a href="register.php">Register</a></li>
            <li class="navs"><a href="cart.php">Cart</a></li>
        </ul>
    </div>
</header>
<section class="main-section section-padding">
    <div class="page-navigation">
        <ul>
            <li class="page-navsli page-nav"><a href="#">Home</a></li>
            <li class="page-navsli page-nav">></li>
            <li class="page-navsli page-nav">Products</li>
            <li class="page-navsli page-nav">></li>
            <li class="page-navsli page-nav">Product Details</li>
            <li class="page-navsli page-nav">></li>
            <li class="page-navsli page-nav">Delete Product</li>
        </ul>
</section>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-info">
            <div class="footer-title">
                Created by:
            </div>
            <div class="footer-text">
                Charles Degraff
            </div>
        </div>
        <div class="footer-info">
            <div class="footer-text">
                1234 Main St<br>Indianapolis, IN 46123<<br>United States
            </div>
        </div>
        <div class="footer-info">
            <div class="footer-text">
                I210
            </div>
        </div>
    </div>
</footer>
</body>
</html>