<?php
session_start();

require_once 'inc/connect.php';

// รับข้อมูลจากแบบฟอร์ม
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_size = $_POST['size'];
$product_amount = $_POST['product_amount'];
$product_detail = $_POST['product_detail'];

$product_name = mysqli_real_escape_string($conn, $product_name);
$product_price = mysqli_real_escape_string($conn, $product_price);
$product_size = mysqli_real_escape_string($conn, $product_size);
$product_amount = mysqli_real_escape_string($conn, $product_amount);
$product_detail = mysqli_real_escape_string($conn, $product_detail);

// เพิ่มข้อมูลใหม่ลงในตารางสินค้า
$sql = "INSERT INTO product (add_name, add_price, add_size, add_detail)
VALUES ('$product_name', '$product_price', '$product_size', '$product_detail')";

if ($conn->query($sql) === TRUE) {
  // รับค่า id ล่าสุดที่ถูกเพิ่มเข้าไปในตาราง product
  $last_insert_id = mysqli_insert_id($conn);
  if(isset($_FILES['images']) && count($_FILES['images']['name']) > 0) {
  // รับข้อมูลภาพจากฟอร์ม
  for ($i = 0; $i < count($_FILES["images"]["name"]); $i++) {
    if ($_FILES["images"]["name"][$i] != "") {
      if (move_uploaded_file($_FILES["images"]["tmp_name"][$i], "img/" . $_FILES["images"]["name"][$i])) {
        //*** Insert Record ***//
        $img_link = mysqli_real_escape_string($conn, $_FILES["images"]["name"][$i]);
        $strSQL = "INSERT INTO image (add_id, img_link) VALUES ('$last_insert_id', '$img_link')";
        if (mysqli_query($conn, $strSQL)) {
          header("Location: add.php");
        } else {
          header("Location: home.php");
        }
      }
    }
  }
}
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
