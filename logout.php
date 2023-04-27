<?php
    session_start(); // เริ่มต้น session
    session_destroy(); // ทำลาย session ทั้งหมด
    header("Location: home.php"); // ส่งกลับไปยังหน้าเว็บไซต์หลัก
    exit(); // ออกจากโปรแกรม
?>
