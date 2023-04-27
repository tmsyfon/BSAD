<!DOCTYPE html>
<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once 'connect.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!----- framework tailwind ----->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://kit.fontawesome.com/4a5bb73cc5.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4a5bb73cc5.js" crossorigin="anonymous"></script>
</head>
<body class="flex flex-col justify-center items-center content-center">
    <nav class="w-screen border-solid border-b-2 border-black" style="height: 85px;">
        <div class="grid grid-cols-2 w-full">
            <div class="pl-5">
                <img class="w-32 m-3" src="https://cdn.discordapp.com/attachments/1020724048889659442/1097278386927321189/logo.png" alt="">
            </div>
            <div class="flex flex-row justify-end items-end content-end pr-10">
                <a class="text-2xl m-6 font-semibold" href="">SHOP<?php echo $user_id;?></a>
                <div class="relative">
                    <input class="p-3 h-12 w-64 border-2 border-solid border-black rounded-3xl m-4" placeholder="search"
                        type="text">
                    <i class="text-xl fa-solid fa-magnifying-glass absolute right-8 top-6"></i>
                </div>
                <i class="fa-solid fa-cart-shopping text-2xl m-6"></i>
                <i class="fa-regular fa-user text-2xl my-6 ml-3 mr-12"></i>
            </div>
        </div>
    </nav>

    <div class="container p-10 flex flex-col justify-center items-center content-center">
        <div class="w-full grid grid-cols-9 mb-10">
            <p class="col-span-1 text-4xl">HISTORY</p>
            <hr class="col-span-8 border border-solid border-black mt-5">
        </div>
        <?php
        // ส่วนของการเชื่อมต่อฐานข้อมูลจะไม่นำมาแสดงในตัวอย่างนี้
// คิวรี่ข้อมูลจากตาราง orders
$sql = "SELECT * FROM orders WHERE id = '$user_id' ORDER BY order_date DESC";
$result = mysqli_query($conn, $sql);
      ?>
        <table id="order-table"class="w-full border-collapse border border-gray-400">
      <thead>
        <tr class="bg-gray-300">
          <th class="text-center py-2" style="width: 15%;">วันที่สั่งซื้อ</th>
          <th class="text-center py-2 col-span-4">เลขใบสั่งซื้อ</th>
          <th class="text-center py-2 bg-gray-300">ราคารวม</th>
          <th class="text-center py-2">สถานะ</th>
        </tr>
      </thead>
      <tbody>

          <?php
          if ($result !== false) { // ตรวจสอบว่าคิวรี่สำเร็จหรือไม่
            while ($row = mysqli_fetch_assoc($result)) { // ใช้งาน mysqli_fetch_assoc() เมื่อคิวรี่สำเร็จ

          ?>
          <tr class="border border-gray-400" onclick="window.location.href='detail_history_user.php?order_id=<?php echo $row["orders_id"] ?>'" style="cursor: pointer;">
  <td class="text-center py-2"><?php echo $row["order_date"] ?></td>
  <td class="text-center py-2 col-span-4"><?php echo $row["orders_id"] ?></td>
  <td class="text-center py-2"><?php echo $row["order_price"] ?></td>
  <td class="text-center py-2"><?php echo $row["status"] ?></td>
<?php
// ดำเนินการตามที่ต้องการ
}
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>
</tr>
        <!-- ส่วนของการวนลูปแสดงผลข้อมูลในตารางจะต้องเพิ่มเองตามโค้ดที่มีอยู่ -->
      </tbody>
    </table>
        <button class="p-3 text-xl rounded-xl bg-black text-white mt-8">back to home</button>
    </div>
    <script>
  const orderTable = document.getElementById('order-table');
  const rows = orderTable.querySelectorAll('.order-row');

  rows.forEach(row => {
    row.addEventListener('click', () => {
      // เปลี่ยนเคอร์เซอร์แถวที่ถูกคลิก
      rows.forEach(row => {
        row.style.backgroundColor = '';
      });
      row.style.backgroundColor = 'yellow';

      // ส่งค่า order_id ไปยังหน้าอื่น
      const orderId = row.id.split('-')[1];
      window.location.href = `detail_history_user.php?order_id=${orderId}`;
    });
  });
</script>

</body>
</html>
