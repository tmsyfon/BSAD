<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$user_permission = $_SESSION['permission'];
require_once 'inc/connect.php';
if (isset($_GET['id'])) {
    $add_id = $_GET['id'];



    // ใช้ค่า id ในการดึงข้อมูลจากฐานข้อมูล
    $query = "SELECT * FROM product WHERE add_id = $add_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $add_name = $row['add_name'];
    $add_size = $row['add_size'];
    $add_amount = $row['add_amount'];
    $add_detail = $row['add_detail'];
    $add_price = $row['add_price'];
    echo 'add_price ='. $add_price;
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
  <!-- เรียกใช้งาน jQuery ผ่าน CDN ของ jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<style>
  input.profile:checked~.subpro {
    display: flex;
  }
</style>
<style>
  input.sizes:checked~.mes {
    background-color: black;
  }

  input.sizem:checked~.mem {
    background-color: black;
  }

  input.sizel:checked~.mel {
    background-color: black;
  }

  input.sizexl:checked~.mexl {
    background-color: black;
  }

  input.sizexxl:checked~.mexxl {
    background-color: black;
  }

  input.profile:checked~.subpro {
    display: flex;
  }
</style>

<body class="flex flex-col justify-center items-center content-center">
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
        <i class="fa-solid fa-cart-shopping text-2xl m-6" id="cart-icon" data-count="" ></i>


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

  <div class="container px-52">
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
        <img src="./img/<?php echo $images; ?>" alt="" class="cover" style="width:370px; height: 370px;">
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
            <img src="./img/<?php echo $image_link2; ?>" alt="" style="width: 6rem; height: 6rem;">
          </a>
          <?php
}
}
          ?>



        </div>
      </div>

      <!----ชื่อสินค้า------>
      <div style="margin-left: 10%;">
        <h1 class="" style="font-size: 30px;">
          <b> <?php echo $row["add_name"]; ?></b>
        </h1><br>
        <!----ราคาสินค้า----->
        <div class="" style="font-size: 20px;"> <strong>Price : </strong> <span class=""><?php echo '฿'.$row["add_price"];?></span></div><br>

        <!------ไซต์----->
        <div class="grid grid-cols-8 justify-center items-center content-center">
          <div class="" style="font-size: 20px;"> <strong>Size : </strong></div>

          <div class="flex flex-row w-full text-center">
            <input id="sizes" type="radio" name="size" class="sizes hidden">
            <label for="sizes" class="mr-1 mes bg-gray-500 text-white rounded-lg " <?php if($add_size == 'S') { ?> style="background-color: black;" <?php } ?> >
              <div class="h-8 w-16 text-center flex justify-center content-center items-center">S</div>
            </label>

            <input id="sizem" type="radio" name="size" class="sizem hidden">
            <label for="sizem" class="mr-1 mem bg-gray-500 text-white rounded-lg " <?php if($add_size == 'M') { ?> style="background-color: black;" <?php } ?>>
              <div class="h-8 w-16 text-center flex justify-center content-center items-center ">M</div>
            </label>

            <input id="sizel" type="radio" name="size" class="sizel hidden">
            <label for="sizel" class="mr-1 mel bg-gray-500 text-white rounded-lg " <?php if($add_size == 'L') { ?> style="background-color: black;" <?php } ?>>
              <div class="h-8 w-16 text-center flex justify-center content-center items-center ">L</div>
            </label>

            <input id="sizexl" type="radio" name="size" class="sizexl hidden">
            <label for="sizexl" class="mr-1 mexl bg-gray-500 text-white rounded-lg " <?php if($add_size == 'XL') { ?> style="background-color: black;" <?php } ?>>
              <div class="h-8 w-16 text-center flex justify-center content-center items-center ">XL</div>
            </label>

            <input id="sizexxl" type="radio" name="size" class="sizexxl hidden">
            <label for="sizexxl" class="mr-1 mexxl bg-gray-500 text-white rounded-lg " <?php if($add_size == 'XXL') { ?> style="background-color: black;" <?php } ?>>
              <div class="h-8 w-16 text-center flex justify-center content-center items-center ">XXL</div>
            </label>
          </div>


        </div>
        <p class="text-sm text-rose-400">* select your size</p><br>
        <!------จำนวนสินค้า------>
        <div style="font-size: 20px;" class="flex flex-row">
          <p><b>จำนวน</b></p>
          <input type="number" class="border-2 border-black ml-3 w-20 text-center" min="1" value="<?php echo $add_amount; ?>">
        </div><br>

        <button class="bg-black text-white rounded-xl p-3" id="add-to-cart" onclick="addToCart()">ADD TO CART</button>

        <script>
  function addToCart() {
    var productId = "<?php echo $add_id ?>";
    var productName = "<?php echo $add_name ?>";
    var productSize = "<?php echo $add_size ?>";
    var productAmount = "<?php echo $add_amount ?>";
    var productDetail = "<?php echo $add_detail ?>";
    var productPrice = "<?php echo $add_price ?>";

    $.ajax({
      type: "POST",
      url: "add-to-cart.php",
      data: {
        id: productId,
        name: productName,
        size: productSize,
        amount: productAmount,
        price: productPrice,
        detail: productDetail
      },
      success: function(response) {
        alert(response);
      }
    });
  }
  </script>





        <div class="border-2 border-solid bg-white border-black mt-5 p-2" style="width: 80%; height: 8rem">
          <h3><?php echo $add_detail; ?></h3>
        </div><br>
      </div>

    </div>
  </div>
  <!------Product------->



  <!-------รูป4รูปของสินค้า---------->
  <div class="grid grid-cols-2" style="margin-top: 3%;">

    <!----------รายละเอียดสินค้า--------------->

  </div>

</body>
<script>
$(document).ready(function() {
  var cartCount = "<?php echo count($_SESSION['cart']) ?>";
  $('#cart-icon').attr('data-count', cartCount);
  $('#cart-icon').html(cartCount);

  // เมื่อคลิกที่ icon ให้ส่งข้อมูล session ไปยังหน้า shop_cart.php ผ่าน AJAX
  $('#cart-icon').click(function(e) {
    e.preventDefault(); // ปิดการกระทำของลิงก์

    $.ajax({
      url: '/BSAD/frontend_user/shop_cart.php',
      type: 'POST',
      data: {session: JSON.stringify(<?php echo json_encode($_SESSION['cart']); ?>)},
      success: function(response) {
        window.location.href = '/BSAD/frontend_user/shop_cart.php'; // โหลดหน้า shop_cart.php หลังจากส่งข้อมูลเสร็จสิ้น
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
    });
  });
});

</script>
</html>
