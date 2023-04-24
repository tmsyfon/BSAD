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
  * {
    font-family: 'Kanit', sans-serif;
  }
</style>

<body class="flex flex-col justify-center items-center content-center">
  <nav class="w-screen border-solid border-b-2 border-black" style="height: 85px;">
    <div class="grid grid-cols-2 w-full">
      <div class="pl-5">
        <img class="w-32 m-3" src="img/logo.png" alt="">
      </div>
      <div class="flex flex-row justify-end items-end content-end pr-10">
        <a class="text-2xl m-6 font-semibold" href="">SHOP</a>
        <div class="relative">
          <input class="p-3 h-12 w-64 border-2 border-solid border-black rounded-3xl m-4" placeholder="search" type="text">
          <i class="text-xl fa-solid fa-magnifying-glass absolute right-8 top-6"></i>
        </div>
        <i class="fa-solid fa-cart-shopping text-2xl m-6"></i>
        <i class="fa-regular fa-user text-2xl my-6 ml-3 mr-12"></i>
      </div>
    </div>
  </nav>

  <!-------------->

  <div class="container py-3 flex flex-col justify-center items-center content-center">
    <div class="">
      <div class="px-48 border-2 border-solid bg-white border-black z-10  mt-9" style="height: 870px; width: 800px;">

        <div class="flex flex-col justify-start items-start content-start pt-12">
          <p class="text-5xl my-3">เพิ่มข้อมูลสินค้า</p>
          <hr class="w-full border-1 border-solid border-black my-3">
          <form class="flex flex-col justify-start items-start content-start border-solid w-full">
            <input class="p-4 my-2 w-full h-11 border-2 border-solid border-black" placeholder="Product name" type="text">
            <input class="p-4 my-2 w-full h-11 border-2 border-solid border-black" placeholder="Price" type="text">
            <p class="text-lg">size</p>
            <div class="grid grid-cols-5 gap-3 h-11 w-full mt-2">
              <button class="w-full h-full border-2 border-solid border-black rounded-lg hover:bg-black hover:text-white">S</button>
              <button class="w-full h-full border-2 border-solid border-black rounded-lg hover:bg-black hover:text-white">M</button>
              <button class="w-full h-full border-2 border-solid border-black rounded-lg hover:bg-black hover:text-white">L</button>
              <button class="w-full h-full border-2 border-solid border-black rounded-lg hover:bg-black hover:text-white">XL</button>
              <button class="w-full h-full border-2 border-solid border-black rounded-lg hover:bg-black hover:text-white">XXL</button>
            </div>
            <p class="text-lg my-2">amount</p>
            <input type="number" value="1" class="w-2/12 h-9 border-2 border-solid border-black rounded-lg text-center text-xl">
            <p class="text-lg my-2">detail</p>
            <textarea class="p-4 w-full h-20 border-2 border-solid border-black mb-2" name="" id="" cols="30" rows="10"></textarea>
            <div class="grid grid-cols-5 w-full my-2">
              <label class="col-span-1" for="">image 1 </label>
              <input class="col-span-4" type="file">
            </div>
            <div class="grid grid-cols-5 w-full my-2">
              <label class="col-span-1" for="">image 2 </label>
              <input class="col-span-4" type="file">
            </div>
            <div class="grid grid-cols-5 w-full my-2">
              <label class="col-span-1" for="">image 3 </label>
              <input class="col-span-4" type="file">
            </div>
            <div class="grid grid-cols-5 w-full my-2">
              <label class="col-span-1" for="">image 4 </label>
              <input class="col-span-4" type="file">
            </div>
            <div class="grid grid-cols-5 w-full my-2">
              <label class="col-span-1" for="">image 5 </label>
              <input class="col-span-4" type="file">
            </div>
            <button class="bg-black text-white px-7 py-3 mt-3 rounded-xl">Submit</button>
          </form>

        </div>

      </div>
    </div>

  </div>
</body>