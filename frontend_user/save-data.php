<?php
session_start();
$user_permission = $_SESSION['permission'];
$orders_id = $_POST['order_id'];
require_once 'connect.php';
$tracking = $_POST['tracking'];
echo 'tracking= '.$orders_id;

?>
