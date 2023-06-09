<html lang="en">
<?php
session_start();
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
  $user_permission = $_SESSION['permission'];
  if($user_permission != 'stock'){
    header("Location: home.php");
  }

  // ใช้ $user_id ได้ทุกหน้า
} else {
  // ถ้าไม่มี session ให้ redirect ไปหน้า Login
  header("Location: login.php");
  exit();
}
?>

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!----- framework tailwind ----->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://kit.fontawesome.com/4a5bb73cc5.css" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/4a5bb73cc5.js" crossorigin="anonymous"></script>

  <!----- fontawesome ----->
  <script src="https://kit.fontawesome.com/a935639c09.js" crossorigin="anonymous"></script>

  <!----- Kanit Font ----->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

  <title>Add Product</title>
</head>

<style>
input.profile:checked~.subpro {
  display: flex;
}
  * {
    font-family: 'Kanit', sans-serif;
  }
  .size-label {
  display: inline-block;
  padding: 6px 12px;
  font-size: 14px;
  font-weight: bold;
  text-align: center;
  border: 2px solid #000;
  border-radius: 4px;
  cursor: pointer;
  }
  .size-label:hover {
  background-color: #000;
  color: #fff;
  }
  .size-input {
  display: none;
  }
  .size-input:checked + .size-label {
  background-color: #000;
  color: #fff;
  }
</style>

<body class="flex flex-col justify-center items-center content-center">
  <?php
  require_once 'menu.php';
  ?>

  <!-------------->

  <div class="container py-3 flex flex-col justify-center items-center content-center">
    <div class="">
      <div class="px-48 border-2 border-solid bg-white border-black z-10  mt-9" style="height: 870px; width: 800px;">

        <div class="flex flex-col justify-start items-start content-start pt-12">
          <p class="text-5xl my-3">เพิ่มข้อมูลสินค้า</p>
          <hr class="w-full border-1 border-solid border-black my-3">
          <form class="flex flex-col justify-start items-start content-start border-solid w-full" method="post" action="add_product.php" enctype="multipart/form-data">
            <input class="p-4 my-2 w-full h-11 border-2 border-solid border-black" placeholder="Product name" type="text" name="product_name">
            <input class="p-4 my-2 w-full h-11 border-2 border-solid border-black" placeholder="Price" type="text" name="product_price">
            <p class="text-lg">size</p>


            <div class="grid grid-cols-5 gap-3 h-11 w-full mt-2">
  <label class="w-full h-full border-2 border-solid border-black rounded-lg">
    <input type="radio" name="size" value="S">
    S
  </label>
  <label class="w-full h-full border-2 border-solid border-black rounded-lg">
    <input type="radio" name="size" value="M">
    M
  </label>
  <label class="w-full h-full border-2 border-solid border-black rounded-lg">
    <input type="radio" name="size" value="L">
    L
  </label>
  <label class="w-full h-full border-2 border-solid border-black rounded-lg">
    <input type="radio" name="size" value="XL">
    XL
  </label>
  <label class="w-full h-full border-2 border-solid border-black rounded-lg">
    <input type="radio" name="size" value="XXL">
    XXL
  </label>
</div>

            
            <p class="text-lg my-2">detail</p>
            <textarea class="p-4 w-full h-20 border-2 border-solid border-black mb-2" cols="30" rows="10" name="product_detail"></textarea>
            <div class="grid grid-cols-5 w-full my-2">
              <label class="col-span-1" for="">image 1 </label>
              <input class="col-span-4" name="images[]" type="file" multiple>
            </div>

            <button class="bg-black text-white px-7 py-3 mt-3 rounded-xl">Submit</button>
          </form>

        </div>

      </div>
    </div>

  </div>
</body>
