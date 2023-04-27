<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$user_permission = $_SESSION['permission'];
require_once 'inc/connect.php';
 ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>

  <!----- framework tailwind ----->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://kit.fontawesome.com/4a5bb73cc5.css" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/4a5bb73cc5.js" crossorigin="anonymous"></script>
</head>
<style>
  input.profile:checked~.subpro {
    display: flex;
  }
</style>
<body class="flex flex-col justify-center items-center content-center">
  <?php
  require_once 'menu.php';
  ?>

  <!------Product------->
  <div class="grid grid-cols-2" style="margin-top: 3%;">

    <!-----รูปสินค้าใหญ่----->
    <div class="pl-20">
      <img src="https://placehold.it/150x80?text=IMAGE" alt="" style="width: 100%; height: 100%;">
    </div>
    <?php
    // คำสั่ง SQL query เพื่อดึงข้อมูลจากตาราง products
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <!----ชื่อสินค้า------>
    <div style="margin-left: 10%;">
      <h1 class="" style="font-size: 30px;">
        <b> <?php echo $row["add_name"]; ?></b>
      </h1><br>
      <!----ราคาสินค้า----->
      <div class="" style="font-size: 20px;"> <strong>Price : </strong> <span class=""> $300.00</span></div><br>

      <!------ไซต์----->
      <div class="grid grid-cols-8 justify-center items-center content-center">
        <div class="" style="font-size: 20px;"> <strong>Size : </strong></div>

        <button class="bg-black text-white rounded-xl"
        style="width:90%; height: 100%; background-color:rgb(189, 186, 186)" width:90%; height: 100%;'">S</button>
        <button class="bg-black text-white rounded-xl"
          style="width:90%; height: 100%; background-color:rgb(189, 186, 186)" width:90%; height: 100%;'">M</button>
        <button class="bg-black text-white rounded-xl"
          style="width:90%; height: 100%; background-color:rgb(189, 186, 186)" width:90%; height: 100%;'">L</button>
        <button class="bg-black text-white rounded-xl"
          style="width:90%; height: 100%; background-color:rgb(189, 186, 186)" width:90%; height: 100%;'">XL</button>
        <button class="bg-black text-white rounded-xl"
          style="width:90%; height: 100%; background-color:rgb(189, 186, 186)" width:90%; height: 100%;'">XXL</button>
      </div><br>
      <!------จำนวนสินค้า------>
      <div style="font-size: 20px;">
        <strong>จำนวน :</strong>
      </div><br>
      <!-----ปุ่มเพิ่มลงตะกร้า------->
      <button class="bg-black text-white rounded-xl" style="width:25%; height: 10%;">เพิ่มลงตระกร้า</button>
    </div>
    <?php
  }
}
    ?>

  </div>
  <!-------รูป4รูปของสินค้า---------->
  <div class="grid grid-cols-2" style="margin-top: 3%;">
    <div class="flex flex-row " style="margin-left: 25.5%; height: 8rem;">
      <a href="#">
        <img src="https://placehold.it/150x80?text=IMAGE" alt="" style="width: 8rem; height: 8rem;">
      </a>
      <a href="#">
        <img src="https://placehold.it/150x80?text=IMAGE" alt="" style="width: 8rem; height: 8rem;">
      </a>
      <a href="#">
        <img src="https://placehold.it/150x80?text=IMAGE" alt="" style="width: 8rem; height: 8rem;">
      </a>
      <a href="#">
        <img src="https://placehold.it/150x80?text=IMAGE" alt="" style="width: 8rem; height: 8rem;">
      </a>
    </div>
    <!----------รายละเอียดสินค้า--------------->
    <div style="margin-left: 10%;">
      <div class="border-2 border-solid bg-white border-radius" style="width: 80%; height: 8rem">
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad soluta illum odio assumenda libero corrupti
          suscipit. Aperiam saepe quaerat magnam.</h3>
      </div><br>
      <!---------ปุ่ม SAVE-------------->
      <button class="bg-black text-white rounded-xl" style="width:30%; height: 30%; margin-left: 50%;">SAVE</button>

    </div>
  </div>



</body>

</html>
