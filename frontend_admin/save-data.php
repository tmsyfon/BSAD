<?php
session_start();
$user_permission = $_SESSION['permission'];
$orders_id = $_POST['orders_id'];
$tracking = $_POST['tracking'];
require_once 'connect.php';

// ทำการอัปเดตข้อมูลในตาราง order โดยใช้คำสั่ง SQL UPDATE
$sql = "UPDATE `orders` SET `tracking` = '$tracking' WHERE `orders_id` = '$orders_id'";

// ทำการ query คำสั่ง SQL UPDATE และตรวจสอบว่ามีการอัปเดตข้อมูลสำเร็จหรือไม่
if ($conn->query($sql) === TRUE) {
  header("Location: manage_order.php?order_id=$orders_id");
  exit();
} else {
  echo "การอัปเดตข้อมูลในตาราง order ผิดพลาด: " . $conn->error;
}

$conn->close();
?>
