<?php
session_start();

//ตรวจสอบว่ามี $_SESSION['cart'] หรือไม่ ถ้าไม่มีให้สร้างตัวแปร array()
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

//ตรวจสอบว่ามีค่า id และ name หรือไม่ก่อนใช้งาน
if (isset($_POST['id']) && isset($_POST['name'])) {
  $productId = $_POST['id'];
  $productName = $_POST['name'];
  $productSize = $_POST['size'];
  $productAmount = $_POST['amount'];
  $productDetail = $_POST['detail'];
  $productPrice = $_POST['price'];

  //เพิ่มสินค้าลงในตะกร้าโดยเก็บข้อมูลไว้ใน session
  $_SESSION['cart'][] = array(
    'id' => $productId,
    'name' => $productName,
    'size' => $productSize,
    'amount' => $productAmount,
    'price' => $productPrice,
    'detail' => $productDetail
  );

  //ส่งข้อความแสดงว่าเพิ่มสินค้าลงในตะกร้าเรียบร้อยแล้ว
  echo "สินค้า ".$productName." ถูกเพิ่มลงในตะกร้าเรียบร้อยแล้ว";
}
?>
