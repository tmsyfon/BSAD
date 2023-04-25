<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

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

  <!------------->

  <div class="container py-10">
    <div class="">
      <div class="border-2 border-solid bg-white border-black z-10 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" style="height: 500px; width: 900px;">
        <div class="flex flex-col justify-center items-center content-center pt-12">
          <p class="text-5xl m-8">LOGIN</p>


          <form class="flex flex-col justify-center items-center content-center border-solid w-full" method="post" action="check_login.php">
            <input class="p-4 m-2 w-5/12 h-11 border-2 border-solid border-black" placeholder="Username" type="text" name="username">
            <input class="p-4 m-2 w-5/12 h-11 border-2 border-solid border-black" placeholder="Password" type="text" name="password">
            <button class="bg-black text-white px-7 py-3 mt-4 rounded-xl">Submit</button>
          </form>

        </div>
      </div>
      <div class="border-2 border-solid border-black z-0 mt-5 ml-5 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" style="height: 500px; width: 900px;">
      </div>
    </div>

  </div>
</body>

</html>