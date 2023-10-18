<?php
session_start();
$user_permission = $_SESSION['permission'];
$add_id = $_POST['add_id'];
$add_name = $_POST['add_name'];
$add_price = $_POST['add_price'];
$add_detail = $_POST['add_detail'];
<<<<<<< Updated upstream
require_once 'connect.php';


=======
<<<<<<< HEAD

require_once 'connect.php';

$add_name = mysqli_real_escape_string($conn, $add_name);
$add_detail = mysqli_real_escape_string($conn, $add_detail);
=======
require_once 'connect.php';


>>>>>>> ca6638568164aa6a90f0feab29be06d41e11f90a
>>>>>>> Stashed changes
// ทำการอัปเดตข้อมูลในตาราง order โดยใช้คำสั่ง SQL UPDATE
$sql = "UPDATE `product` SET `add_name` = '$add_name', `add_price` = '$add_price', `add_detail` = '$add_detail' WHERE `add_id` = '$add_id'";

// ทำการ query คำสั่ง SQL UPDATE และตรวจสอบว่ามีการอัปเดตข้อมูลสำเร็จหรือไม่
if ($conn->query($sql) === TRUE) {

  header("Location: /product.php?id=$add_id");
  exit();
} else {
  echo "การอัปเดตข้อมูลในตาราง order ผิดพลาด: " . $conn->error;
}

$conn->close();
?>
