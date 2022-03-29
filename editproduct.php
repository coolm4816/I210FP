<?php
require_once 'database.php';
require_once('includes/header.php');
?>

if (!filter_has_var(INPUT_GET, "id")) {
    $error = "Your request cannot be processed since there was a problem retrieving book id.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT * 
      FROM $tblGames, $tblPlatform 
      WHERE games.category_id = platform.category_id
      AND id=$id";

$query = @$conn->query($sql);

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
            <li class="page-navsli page-nav">></li>
            <li class="page-navsli page-nav">Edit Products</li>
        </ul>
    </div>
    <div class="productdetails">
        <div class="column">
            <div>Title:</div>
            <div>Release Date:</div>
            <div>Price:</div>
            <div>Description:</div>
            <div>Image:</div>
        </div>
        <div class="content">
            <div><input name="title" size="80" value="<?php echo $row['title'] ?>" required></div>
            <div><input name="publish_date" value="<?php echo $row['release_date'] ?>" required></div>
            <<div><input name="price" type="number" step="0.01" value="<?php echo $row['price'] ?>" required></div>
            <div><textarea name="description" rows="6" cols="65"><?php echo $row['description'] ?></textarea></div>
            <div><input name="image" size="100" value="<?php echo $row['image'] ?>" required></div>
        </div>
    </div>
    <div class="button">
        <input type="hidden" name="id" value="<?php echo $id ?>" />
        <input type="button" value="Update" onclick="window.location.href = 'productdetails.php?id=<?= $id ?>'" />
    </div>
</section>
<?php
require_once('includes/footer.php');
?>