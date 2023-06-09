<!DOCTYPE html>
<html lang="en">

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

  <div class="container px-52 py-7">
    <div class="grid grid-cols-2" style="margin-top: 3%;">
      <!-----รูปสินค้าใหญ่----->
      <div class="flex flex-col justify-center items-center content-center">
        <img src="./img/pic1-1.jpg" alt="" class="cover" style="width:370px; height: 370px;">

        <div class="grid grid-cols-4 mt-3 gap-2">
          <a href="#">
            <img src="https://placehold.it/150x80?text=IMAGE" alt="" style="width: 6rem; height: 6rem;">
          </a>
          <a href="#">
            <img src="https://placehold.it/150x80?text=IMAGE" alt="" style="width: 6rem; height: 6rem;">
          </a>
          <a href="#">
            <img src="https://placehold.it/150x80?text=IMAGE" alt="" style="width: 6rem; height: 6rem;">
          </a>
          <a href="#">
            <img src="https://placehold.it/150x80?text=IMAGE" alt="" style="width: 6rem; height: 6rem;">
          </a>
        </div>
      </div>

      <!----ชื่อสินค้า------>
      <form style="margin-left: 10%;">
        <h1 class="" style="font-size: 30px;">
          <input type="text" value="Leopard Shirt Dress" class="border-2 border-black p-1">
        </h1><br>
        <!----ราคาสินค้า----->
        <div class="" style="font-size: 20px;">
          <strong>Price : </strong>
          <input type="text" name="" id="" value="฿300.00" class="border-2 border-black w-36 p-1">
        </div><br>

        <!------จำนวนสินค้า------>
        <div style="font-size: 20px;" class="flex flex-row">
          <p><b>จำนวน</b></p>
          <input type="number" class="border-2 border-black ml-3 w-20 text-center" min="1" value="1">
        </div><br>
        <!-----ปุ่มเพิ่มลงตะกร้า------->

        <textarea class="border-2 border-solid bg-white border-black mt-5 p-2" style="width: 80%; height: 8rem">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad soluta illum odio assumenda libero corruptisuscipit. Aperiam saepe quaerat magnam.
        </textarea><br>
        <div class="items-end justify-end content-end flex pr-24">
          <button class="bg-black text-white rounded-xl p-3 mt-5 w-24">SAVE</button>
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