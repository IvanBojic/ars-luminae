<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item_index'])) {
    $index = (int)$_POST['item_index'];

    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);

        // Re-index the cart array to prevent issues with missing indices
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

header('Location: page-cart.php');
exit;
?>
