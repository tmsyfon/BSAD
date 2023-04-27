<?php
session_start();

  unset($_SESSION['cart']);
  echo "Cart cleared.";
  header("Location: /shop_list.php");
  exit();

?>
