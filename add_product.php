<?php
require_once 'inc/connect.php';

// รับข้อมูลจากแบบฟอร์ม
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_size = $_POST['size'];
$product_amount = $_POST['product_amount'];
$product_detail = $_POST['product_detail'];

// เพิ่มข้อมูลใหม่ลงในตารางสินค้า
$sql = "INSERT INTO product (add_name, add_price, add_size, add_amount, add_detail)
VALUES ('$product_name', '$product_price', '$product_size', '$product_amount', '$product_detail')";

if ($conn->query($sql) === TRUE) {
  echo "New product added successfully";
  header("Location: add.php"); // ไปยังหน้า Add.php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


 ?>
