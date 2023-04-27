<?php
session_start();
require_once 'connect.php';
// Check if cart is not empty
if (empty($_SESSION['cart'])) {
  header('Location: cart.php');
  exit();
}

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit();
}

// Check if ID is provided
if (!isset($_POST['id'])) {
  header('Location: cart.php');
  exit();
}


// Get ID from POST request
$id = mysqli_real_escape_string($conn, $_POST['id']);

// Delete item from cart
$cart = $_SESSION['cart'];
foreach ($cart as $key => $item) {
  if ($item['id'] == $id) {
    unset($cart[$key]);
  }
}
$_SESSION['cart'] = $cart;

// Redirect to cart page
header('Location: cart.php');
exit();
?>
