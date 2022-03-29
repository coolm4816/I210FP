<?php
require_once('includes/database.php');
require_once('includes/header.php');

//retrieve search term
if (!filter_has_var(INPUT_GET, "q")) {
    $error = "There was no search terms found.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}
$term = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING);

//explode the search terms into an array
$terms = explode(" ", $term);

$sql = "SELECT id, title, publisher, price, platform
FROM $tblGames, $tblPlatform
WHERE $tblGames.platform_id = $tblPlatform.platform_id AND ";
foreach ($terms as $t) {
    $sql .= "title LIKE '%$t%' AND ";
}
$sql = rtrim($sql, "AND ");

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
            <li class="page-navsli page-nav">Search</li>
            <li class="page-navsli page-nav">></li>
            <li class="page-navsli page-nav">Search Results</li>
        </ul>
    </div>
    <div class="result-conent">
        <div class="heading">
            Search Results
        </div>
        <h2>Search Results for: '<?= $term ?>'</h2>
        <? ?>
        <div class="product-list">
            <div class="row header">
                <div class="col1">Title</div>
                <div class="col2">Publisher</div>
                <div class="col3">Price</div>
                <div class="col4">Platform</div>
            </div>
        </div>
        <?php while ($row = $query->fetch_assoc()) { ?>
            <div class="row">
                <div class="col1"><?= $row['title'] ?></div>
                <div class="col2"><?= $row['publisher'] ?></div>
                <div class="col3"><?= $row['price'] ?></div>
                <div class="col4"><?= $row['platform'] ?></div>
            </div>
        <?php } ?>
    </div>
</section>
<?php
require_once('includes/footer.php');
?>