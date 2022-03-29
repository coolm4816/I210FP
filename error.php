<?php

require_once ('includes/database.php');
require_once ('includes/header.php');
$error='Default error.';
if (filter_has_var(INPUT_GET, "m")) {
    $error = filter_input(INPUT_GET, 'm', FILTER_SANITIZE_STRING);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
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
    <div class="page-navigation"></div>
    <h2>Error</h2>

    <table style="width: 100%; border: none">
        <tr>
            <td style="vertical-align: middle; text-align: center; width:100px">
                <img src='www/img/error.png' style="width: 80px; border: none"/>
            </td>
            <td style="text-align: left; vertical-align: top;">
                <h3>Sorry, but an error has occurred.</h3>
                <div style="color: red">
                    <?= $error ?>
                </div>
                <br>
            </td>
        </tr>
    </table>
    <br><br><br><br><br>
</section>
<?php
require_once ('includes/footer.php')
?>