<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./inc/demo.css">

  <!----- font kanit ----->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

  <title>Register</title>

  <!----- java ----->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script src="service/province.service.js" type="text/javascript"></script>

  <!----- framework tailwind ----->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://kit.fontawesome.com/4a5bb73cc5.css" crossorigin="anonymous">

  <!----- icon ----->
  <script src="https://kit.fontawesome.com/4a5bb73cc5.js" crossorigin="anonymous"></script>
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

  <div class="container py-10">
    <div class="">
      <div class="border-2 border-solid bg-white border-black z-10 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" style="height: 500px; width: 900px;">
        <d iv class="flex flex-col justify-center items-center content-center">
          <p class="text-5xl m-8">REGISTER</p>
          <form class="flex flex-col justify-center items-center content-center" method="post" action="save_register.php">
          <div class="w-full grid grid-cols-2">

            
              <div class="flex flex-col justify-center items-center content-center border-solid border-r-2 border-black">
                <input class="p-4 m-2 w-10/12 h-11 border-2 border-solid border-black" name="username" placeholder="Username" type="text">
                <input class="p-4 m-2 w-10/12 h-11 border-2 border-solid border-black" name="firstname" placeholder="First name" type="text">
                <input class="p-4 m-2 w-10/12 h-11 border-2 border-solid border-black" name="lastname" placeholder="Last name" type="text">
                <input class="p-4 m-2 w-10/12 h-11 border-2 border-solid border-black" name="phone" placeholder="Phone" type="text">
                <input class="p-4 m-2 w-10/12 h-11 border-2 border-solid border-black" name="password" placeholder="Password" type="text">
              </div>
              
            

            <div class="flex flex-col justify-center items-center content-center p-4">
              <div class="w-full h-full border-2 border-solid border-black grid grid-rows-6 h-full p-4">

                <textarea class="row-span-3 border-2 border-solid border-black mb-3 p-2" name="house" placeholder="House No. / Village" name="" id=""></textarea>
                <div class="row-span-3">
                  <div class="grid grid-cols-2 w-full">

                    <div class="flex flex-col justify-center items-center content-center py-1 mr-1">
                      <select class="border-2 border-solid border-black w-full mb-5 h-10" name="province" id="province">
                        <option>SELECT</option>
                      </select>
                      <select class="border-2 border-solid border-black w-full h-10" name="district" id="district">
                        <option>SELECT</option>
                      </select>
                    </div>
                    <div class="flex flex-col justify-center items-center content-center py-1 ml-1">
                      <select class="border-2 border-solid border-black w-full mb-5 h-10" name="subdistrict" id="subdistrict">
                        <option>SELECT</option>
                      </select>
                      <input class="h-10 border-2 border-solid border-black w-full p-2" placeholder="Post ID" type="text" name="postal">
                    </div>

                  </div>
                </div>

              </div>
            </div>

          </div>
          <button class="bg-black text-white px-7 py-3 mt-4 rounded-xl" type="submit">Register</button>
          </form>
      </div>
    </div>
    <div class="border-2 border-solid border-black z-0 mt-5 ml-5 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" style="height: 500px; width: 900px;">
    </div>
  </div>

  </div>
</body>

</html>