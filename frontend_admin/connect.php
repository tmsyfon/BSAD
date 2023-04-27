<?php
// กำหนดข้อมูลการเชื่อมต่อฐานข้อมูล
$host = "localhost";
$username = "root";
$password = "";
$dbname = "kkvintage";
// สร้างการเชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($host, $username, $password, $dbname);
// เชื่อมต่อฐานข้อมูลและกำหนดค่าให้กับตัวแปร $pdo
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "เกิดข้อผิดพลาดในการเชื่อมต่อฐานข้อมูล: " . $e->getMessage();
}
?>
