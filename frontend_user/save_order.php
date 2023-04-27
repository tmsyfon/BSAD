<?php
session_start();
require_once 'connect.php';
// ตรวจสอบว่ามีการส่งค่า POST มาหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $add_name = $_POST['add_name'];
    $add_price = $_POST['add_price'];
    $order_price = $_POST['order_price'];
    $address = $_POST['address'];
    $current_time = date('Y-m-d H:i:s');
    $user_id = $_SESSION['user_id'];
    $bank = $_POST['bank'];
    $id_list = $_SESSION['id_list'];
    $add_price2 = $_SESSION['add_price'];




    // บันทึกข้อมูลลงฐานข้อมูล
    $sql = "INSERT INTO orders (order_price, order_date, status, id, address, payment) VALUES ('$order_price', '$current_time', 'รอยืนยัน', '$user_id', '$address', '$bank')";

    if ($conn->query($sql) === TRUE) {
      // หา ID ล่าสุดที่เพิ่งถูกเพิ่มในตาราง orders
    $last_insert_id = mysqli_insert_id($conn);
    // $sql = "INSERT INTO order_detail (order_id) VALUES ('$last_insert_id')";
      // // หา ID ล่าสุดที่เพิ่งถูกเพิ่มในตาราง order_detail
      //  $last_insert_detail_id = mysqli_insert_id($conn);

       // เพิ่มข้อมูลในตาราง order_detail_items
       foreach ($id_list as $key => $id) {
       // $add_price = $add_price2[$key]; // กำหนดค่าของ $add_price เป็นค่าของ $add_price2 ที่มีตำแหน่งเดียวกัน
       $sql1 = "INSERT INTO order_detail (order_id, add_id) VALUES ('$last_insert_id', '$id')";
       if ($conn->query($sql1) !== TRUE) {
           echo "Error: " . $sql1 . "<br>" . $conn->error;
       }
     }


     echo "<script>alert('Confirm order success!')</script>";
     echo "<script>window.location.href='history_user.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    $conn->close();
}

?>
