<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$user_permission = $_SESSION['permission'];
echo 'permission =' . $user_permission;
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>

  <!----- framework tailwind ----->
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://kit.fontawesome.com/4a5bb73cc5.css" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/4a5bb73cc5.js" crossorigin="anonymous"></script>

</head>

<style>
  input.profile:checked~.subpro {
    display: flex;
  }
</style>


<body class="flex flex-col justify-center items-center content-center overflow-x-hidden">

  <nav style="height: 85px; width: 100vw; border-bottom: 2px solid black;">
    <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); width: 100%;">
      <div style="padding-left: 1.25rem;">
        <img style="width: 8rem; margin: 0.75rem;" src="https://cdn.discordapp.com/attachments/1020724048889659442/1097278386927321189/logo.png" alt="">
      </div>
      <div style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; align-content: flex-end; padding-right: 2.5rem;">
        <a style="font-size: 1.5rem; line-height: 2rem; margin: 1.5rem; font-weight: 600;" href="">SHOP</a>
        <div style="position: relative;">
          <input style="padding: 0.75rem; height: 3rem; width: 16rem; border: 2px solid black; border-radius: 1.5rem; margin: 1rem;" placeholder="search" type="text">
          <i class="fa-solid fa-magnifying-glass" style="font-size: 1.25rem; line-height: 1.75rem; position: absolute; right: 2rem; top: 1.5rem;"></i>
        </div>
        <i class="fa-solid fa-cart-shopping" style="font-size: 1.5rem; line-height: 2rem; margin: 1.5rem;"></i>
        <!-- ไอคอนรูปโปรไฟล์ -->
        <input type="checkbox" class="profile hidden" id="profile" name="profile">
        <label for="profile" class="m-3 mb-4">
          <i class="fa-regular fa-user" style="font-size: 1.5rem; line-height: 2rem; "></i>
        </label>
        <!-- submenu ที่ยื่นออกมา -->
        <div class="subpro hidden absolute top-20 mt-1 right-12 w-40 h-20 border-2 border-black bg-white flex flex-col justify-center content-center items-center text-center">
          <a class="h-10 p-1 w-full hover:bg-black hover:text-white hover:no-underline" href="">History Order</a>
          <a class="h-10 p-1 border-t-2 border-black w-full hover:bg-black hover:text-white hover:no-underline" href="">Log out</a>
        </div>

      </div>
    </div>
  </nav>

  <!------HOME------->

  <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block" style="height: 450px;" src="https://media.discordapp.net/attachments/1068182987411296347/1100049228623003658/3.png?width=1440&height=461" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block" style="height: 450px;" src="https://media.discordapp.net/attachments/1068182987411296347/1100049228912414790/2.png?width=1440&height=461" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block" style="height: 450px;" src="https://media.discordapp.net/attachments/1068182987411296347/1100049229252132864/1.png?width=1440&height=461" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container p-5">
    <p class="text-4xl m-3">NEW ARRIVAL</p>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">

          <div class="grid grid-cols-5 gap-3">

            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>

          </div>

        </div>
        <div class="carousel-item">

          <div class="grid grid-cols-5 gap-3">

            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>

          </div>

        </div>
        <div class="carousel-item">

          <div class="grid grid-cols-5 gap-3">

            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>
            <div class="w-full p-3 cursor-pointer">
              <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                <p class="text-xl font-semibold">Name</p>
                <p class="text-lg">price</p>
              </div>
            </div>

          </div>

        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</body>

</html>