<?php
require_once ('includes/database.php');
require_once('includes/header.php');

if (!filter_has_var(INPUT_GET, 'id')) {
    $error = "There was a problem retrieving book id.";
    header("Location: error.php?m=$error");
    die();
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//MySQL SELECT statement
$sql = "SELECT * FROM $tblGames, $tblPlatform WHERE games.category_id = platform.category_id AND id=$id";

//execute the query
$query = @$conn->query($sql);

//Handle errors
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
    </div>

    <h2>Book Details</h2>
    <div class="bookdetails">
        <div class="cover">
            <!-- display book image -->
            <img src="<?= $row['image'] ?>">
        </div>
        <div class="label">
            <!-- display book attributes  -->
            <div>Title:</div>
            <div>Release Date:</div>
            <div>Price:</div>
            <div>Description:</div>
        </div>

        <div class="content">
            <!-- display book details -->
            <div><?= $row['title'] ?></div>
            <div><?= $row['release_date'] ?></div>
            <div>$<?= $row['price'] ?></div>
            <div><?= $row['description'] ?></div>
        </div>
    </div>
    <div class="bookstore-button">
        <input type="button" value="Delete"
               onclick="window.location.href = 'removeproduct.php?id=<?= $id ?>'">
        <input type="button" value="Cancel"
               onclick="window.location.href = 'productdetails.php?id=<?= $id ?>'">
        <div style="color: red; display: inline-block;">Are you sure you want to delete the book?</div>
    </div>
</section>
<?php
require_once('includes/footer.php');
?>