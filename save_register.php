<?php
require "../BSAD/frontend_user/inc/connect.php";

// รับค่าจากฟอร์ม
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$house = $_POST['house'];
$province = $_POST['province'];
$district = $_POST['district'];
$subdistrict = $_POST['subdistrict'];
$postal = $_POST['postal'];

// สร้างคำสั่ง SQL สำหรับบันทึกข้อมูล
$sql = "INSERT INTO regis_user (username, password, firstname, lastname, phone, house, province, district, subdistrict, postalcode)
        VALUES ('$username', '$password', '$firstname', '$lastname', '$phone', '$house', '$province', '$district', '$subdistrict', '$postal')";

// ส่งคำสั่ง SQL เพื่อบันทึกข้อมูล
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>
