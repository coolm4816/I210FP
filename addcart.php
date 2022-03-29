
<?php
require_once('includes/database.php');
require_once('includes/header.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = array();
}

//retrieve book id
$id = '';
if(filter_has_var(INPUT_GET, 'id')) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
}
// If book id is empty, it is invalid.
if(!$id) {
    $error = "Invalid book id detected. Operation cannot proceed.";
    header("Location: error.php?m=$error");
    die();
}

if (array_key_exists($id, $cart)) {
    $cart[$id] = $cart[$id] + 1;
} else {
    $cart[$id] = 1;
}

//update the session variable
$_SESSION['cart'] = $cart;

//redirect to the cart.php page.
header('Location: cart.php');
?>
<?php
require_once('includes/footer.php');
?>