<?php

require_once 'database.php';

if (!filter_has_var(INPUT_GET, "id")) {
    $error = "Your request cannot be processed since there was a problem retrieving
 book id.";
    $conn->close();
    die();
}

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT *
 FROM $tblGames, $tblPlatform
 WHERE games.platform_id = platform.platform_id
 AND id=$id";

$query = $conn->query($sql);

if (!$query) {
    $error = "Selection failed: " . $conn->error;
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}

$row = $query->fetch_assoc();
if (!$row) {
    $error = "Book not found";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}
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
        </ul>
    </div>

    <h2>Product Details</h2>
    <div class="productdetails">
        <div class="image">
            <img src="<? $row['image']?>">
        </div>
        <div class="column">
            <div>Title:</div>
            <div>Release Date:</div>
            <div>Price:</div>
            <div>Description:</div>
        </div>
        <div class="content">
            <div><?= $row['title'] ?></div>
            <div><?= $row['release_date'] ?></div>
            <div><?= $row['price'] ?></div>
            <div><?= $row['description']?></div>
        </div>
    </div>
    <?php
    $confirm = "";
    if(isset($_GET['m'])) {
        if ($_GET['m'] == "insert") {
            $confirm = "You have successfully added the new book.";
        }
    }

    else if ($_GET['m'] == "update") {
        $confirm = "Your book has been successfully updated.";
    }
    ?>
    <div class="button">
        <input type="button"
               onclick="window.location.href='editproduct.php'"
               value="Edit">
        <input type="button"
               onclick="window.location.href='deleteproduct.php'"
               value="Delete">
        <input type="button"
               onclick="window.location.href='products.php'"
               value="Cancel">
        <div style="color: red; display: inline-block;"><?= $confirm ?></div>
    </div>
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