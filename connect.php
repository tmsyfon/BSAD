<?php
// กำหนดข้อมูลการเชื่อมต่อฐานข้อมูล
$host = "localhost";
$username = "root";
$password = "";
$dbname = "kkvintage";

// สร้างการเชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($host, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
