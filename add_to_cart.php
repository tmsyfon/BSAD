<?php
session_start();
$product = array(
    'add_name' => $add_name,
    'add_size' => $add_size,
    'add_amount' => $add_amount,
    'add_detail' => $add_detail
);
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
array_push($_SESSION['cart'], $product);
$count = count($_SESSION['cart']);
echo $count;
?>
