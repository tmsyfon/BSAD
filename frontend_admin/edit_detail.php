<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$user_permission = $_SESSION['permission'];
require_once 'connect.php';
if (isset($_POST['add_id'])) {
    $add_id = $_POST['add_id'];



    // ใช้ค่า id ในการดึงข้อมูลจากฐานข้อมูล
    $query = "SELECT * FROM product WHERE add_id = $add_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $add_name = $row['add_name'];
    $add_size = $row['add_size'];
    $add_amount = $row['add_amount'];
    $add_detail = $row['add_detail'];
    $add_price = $row['add_price'];
    $add_id = $row['add_id'];
<<<<<<< Updated upstream
    echo 'add_price ='. $add_id;
=======
<<<<<<< HEAD
    // echo 'add_price ='. $add_id;
=======
    echo 'add_price ='. $add_id;
>>>>>>> ca6638568164aa6a90f0feab29be06d41e11f90a
>>>>>>> Stashed changes
}

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
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
<?php
require_once '../menu.php';
?>
=======
>>>>>>> Stashed changes
  <nav class="w-screen border-solid border-b-2 border-black" style="height: 85px;">
    <div class="grid grid-cols-2 w-full">
      <div class="pl-5">
        <img class="w-32 m-3"
          src="https://cdn.discordapp.com/attachments/1020724048889659442/1097278386927321189/logo.png" alt="">
      </div>
      <div class="flex flex-row justify-end items-end content-end pr-10">
        <a class="text-2xl m-6 font-semibold" href="">SHOP</a>
        <div class="relative">
          <input class="p-3 h-12 w-64 border-2 border-solid border-black rounded-3xl m-4" placeholder="search"
            type="text">
          <i class="text-xl fa-solid fa-magnifying-glass absolute right-8 top-6"></i>
        </div>
        <i class="fa-solid fa-cart-shopping text-2xl m-6"></i>
        <!-- ไอคอนรูปโปรไฟล์ -->
        <input type="checkbox" class="profile hidden" id="profile" name="profile">
        <label for="profile" class="m-3 mb-6">
          <i class="fa-regular fa-user" style="font-size: 1.5rem; line-height: 2rem;"></i>
        </label>
        <!-- submenu ที่ยื่นออกมา -->
        <div
          class="subpro hidden absolute top-20 mt-1 right-12 w-40 h-20 border-2 border-black bg-white flex flex-col justify-center content-center items-center text-center">
          <a class="h-10 p-1 w-full hover:bg-black hover:text-white hover:no-underline" href="">History
            Order</a>
          <a class="h-10 p-1 border-t-2 border-black w-full hover:bg-black hover:text-white hover:no-underline"
            href="">Log out</a>
        </div>
      </div>
    </div>
  </nav>
<<<<<<< Updated upstream
=======
>>>>>>> ca6638568164aa6a90f0feab29be06d41e11f90a
>>>>>>> Stashed changes

  <div class="container px-52 py-7">
    <div class="grid grid-cols-2" style="margin-top: 3%;">
      <!-----รูปสินค้าใหญ่----->
      <?php
      $sql1 = "SELECT * FROM image WHERE add_id = $add_id LIMIT 1";
      $result1 = mysqli_query($conn, $sql1);
      if ($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()) {
          if (!empty($row1["img_link"])) {
            $images = $row1["img_link"];

      ?>
      <div class="flex flex-col justify-center items-center content-center">
<<<<<<< Updated upstream
        <img src="/BSAD/img/<?php echo $images; ?>" alt="" class="cover" style="width:370px; height: 370px;">
=======
<<<<<<< HEAD
        <img src="/img/<?php echo $images; ?>" alt="" class="cover" style="width:370px; height: 370px;">
=======
        <img src="/BSAD/img/<?php echo $images; ?>" alt="" class="cover" style="width:370px; height: 370px;">
>>>>>>> ca6638568164aa6a90f0feab29be06d41e11f90a
>>>>>>> Stashed changes
        <?php
      }
      }
      }
        ?>
        <div class="grid grid-cols-4 mt-3 gap-2">
          <?php
     $sql2 = "SELECT * FROM image WHERE add_id = $add_id";
     $result2 = mysqli_query($conn, $sql2);
       if ($result2->num_rows > 0) {
         // ตั้งค่า flag เป็น false ให้ก่อนเข้าลูป while
 $first = false;
       while($row2 = $result2->fetch_assoc()) {
         if (!$first) {
     $first = true;
     continue;
   }
          // if (!$first) { // Skip first row
            $image_link2 = $row2['img_link'];

   ?>
          <a href="#">
<<<<<<< Updated upstream
            <img src="/BSAD/img/<?php echo $image_link2; ?>" alt="" style="width: 6rem; height: 6rem;">
=======
<<<<<<< HEAD
            <img src="/img/<?php echo $image_link2; ?>" alt="" style="width: 6rem; height: 6rem;">
=======
            <img src="/BSAD/img/<?php echo $image_link2; ?>" alt="" style="width: 6rem; height: 6rem;">
>>>>>>> ca6638568164aa6a90f0feab29be06d41e11f90a
>>>>>>> Stashed changes
          </a>
          <?php
}
}
          ?>
        </div>
      </div>

      <!----ชื่อสินค้า------>
      <form style="margin-left: 10%;" method="post" action="update_detail.php">
        <h1 class="" style="font-size: 30px;">
          <input type="text" name="add_name" value="<?php echo $add_name; ?>" class="border-2 border-black p-1">
        </h1><br>
        <!----ราคาสินค้า----->
        <div class="" style="font-size: 20px;">
          <strong>Price: </strong>
          <input type="text" name="add_price" id="" value="<?php echo $add_price; ?>" class="border-2 border-black w-36 p-1">
        </div><br>

        <!------จำนวนสินค้า------>
        <div style="font-size: 20px;" class="flex flex-row">
          <p><b>จำนวน</b></p>
          <input type="number" class="border-2 border-black ml-3 w-20 text-center" min="1" value="1">
        </div><br>
        <!-----ปุ่มเพิ่มลงตะกร้า------->

        <textarea class="border-2 border-solid bg-white border-black mt-5 p-2" style="width: 80%; height: 8rem" name="add_detail">
            <?php echo $add_detail; ?>
        </textarea><br>
        <input type="hidden" name="add_id" value="<?php echo $add_id; ?>">
        <div class="items-end justify-end content-end flex pr-24">
          <button class="bg-black text-white rounded-xl p-3 mt-5 w-24" type="submit">SAVE</button>
          <button class="bg-rose-500 text-white rounded-xl p-3 mt-5 w-24 ml-3">DELETE</button>
        </div>
      </form>

    </div>
  </div>
  <!------Product------->


  <!-------รูป4รูปของสินค้า---------->
  <div class="grid grid-cols-2" style="margin-top: 3%;">

    <!----------รายละเอียดสินค้า--------------->

  </div>



</body>

</html>
