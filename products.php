<title>Retro Video Game Store: Products | Retro Games</title>
<?php
require_once ('includes/database.php');
require_once ('includes/header.php');

$sql = "SELECT id, title, publisher, price, platform
FROM $tblGames, $tblPlatform
WHERE $tblGames.platform_id = $tblPlatform.platform_id AND";

$query = $conn->query($sql);

if (!$query) {
    $error = "Selection failed: " . $conn->error;
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}
?>
    <section class="main-section section-padding">
        <div class="page-navigation">
            <ul>
                <li class="page-navsli page-nav"><a href="#">Home</a></li>
                <li class="page-navsli page-nav">></li>
                <li class="page-navsli page-nav">Products</li>
            </ul>
        </div>
        <div class="about-conent">
            <div class="heading product-category">
                All Products
            </div>
            <div class="product-section">
                <div class="product-side-bar">
                    <ul class="side-bars">
                        <li class="single-bar"><a href="" class="bar-link"><span class="bar-text">Price</span><span class="bar-icon">+</span></a></li>
                        <li class="single-bar"><a href="" class="bar-link"><span class="bar-text">Platforms</span><span class="bar-icon">+</span></a></li>
                        <li class="single-bar"><a href="" class="bar-link"><span class="bar-text">Availability</span><span class="bar-icon">+</span></a></li>
                        <li class="single-bar"><a href="" class="bar-link"><span class="bar-text">Product Type</span><span class="bar-icon">+</span></a></li>
                        <li class="single-bar"><a href="" class="bar-link"><span class="bar-text">ESRB</span><span class="bar-icon">+</span></a></li>
                        <li class="single-bar"><a href="" class="bar-link"><span class="bar-text">Players</span><span class="bar-icon">+</span></a></li>
                        <li class="single-bar"><a href="" class="bar-link"><span class="bar-text">Review Stars</span><span class="bar-icon">+</span></a></li>
                        <li class="single-bar"><a href="" class="bar-link"><span class="bar-text">Gener</span><span class="bar-icon">+</span></a></li>
                        <li class="single-bar"><a href="" class="bar-link"><span class="bar-text">Condition</span><span class="bar-icon">+</span></a></li>
                    </ul>
                </div>
                <div class="productlist">
                    <div class="row header">
                        <div class="col1">Title</div>
                        <div class="col2">Publisher</div>
                        <div class="col3">Price</div>
                        <div class="col4">Platform</div>
                    </div>

                    <div class="row">
                        <div class="col1"><a href="productdetails.php?id=<?= $row['id'] ?>"><?= $row['title'] ?>"</a></div>
                        <div class="col2"><?= $row['author'] ?></div>
                        <div class="col3"><div class="col3"><?= $row['category'] ?></div></div>
                        <div class="col4"><?= $row['price'] ?></div>
                    </div>
                </div>
        </div>
    </section>
    <?php
require_once('includes/footer.php');

?>