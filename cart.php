<head><title>Retro Video Game Store: Cart | Retro Games</title></head>
<?php
require_once('includes/database.php');
require_once('includes/header.php');
?>
    <section class="main-section section-padding">
        <div class="page-navigation">
            <ul>
                <li class="page-navsli page-nav"><a href="#">Home</a></li>
                <li class="page-navsli page-nav">></li>
                <li class="page-navsli page-nav">Cart</li>
            </ul>
        </div>
        <div class="about-conent">
            <div class="heading">
                YOUR CART (0 ITEMS)
            </div>
            <div class="about-text">
                <?php
                //select statement
                $sql = "SELECT id, title, price FROM books WHERE 0";
                foreach (array_keys($cart) as $id) {
                    $sql .= " OR id=$id";
                }

                //execute the query
                $query = $conn->query($sql);

                //fetch books
                while ($row = $query->fetch_assoc()) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $qty = $cart[$id];
                    $subtotal = $qty * $price;
                ?>

                    <div class="row">
                        <div class="col1"><a href='productdetails.php?id=<?= $id ?>'><?=
                                                                                        $title ?></a></div>
                        <div class="col2">$<?= $price ?></div>
                        <div class="col3"><?= $qty ?></div>
                        <div class="col4">$<?php printf("%.2f", $subtotal); ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php 
require_once('includes/footer.php');
?>