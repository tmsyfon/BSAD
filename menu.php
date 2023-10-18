<?php
if($user_permission != ''){
?>
<nav style="height: 85px; width: 100vw; border-bottom: 2px solid black;">
  <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); width: 100%;">
    <div style="padding-left: 1.25rem;">
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
        <a onclick="window.location.href = '/home.php';">
        <img style="width: 8rem; margin: 0.75rem;" src="https://cdn.discordapp.com/attachments/1020724048889659442/1097278386927321189/logo.png" alt="">              
        </a>
      
    </div>
    <div style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; align-content: flex-end; padding-right: 2.5rem;">
      <a style="font-size: 1.5rem; line-height: 2rem; margin: 1.5rem; font-weight: 600;" onclick="window.location.href = '/shop_list.php';">SHOP</a>
=======
>>>>>>> Stashed changes
      <img style="width: 8rem; margin: 0.75rem;" src="https://cdn.discordapp.com/attachments/1020724048889659442/1097278386927321189/logo.png" alt="">
    </div>
    <div style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; align-content: flex-end; padding-right: 2.5rem;">
      <a style="font-size: 1.5rem; line-height: 2rem; margin: 1.5rem; font-weight: 600;" href="">SHOP</a>
<<<<<<< Updated upstream
=======
>>>>>>> ca6638568164aa6a90f0feab29be06d41e11f90a
>>>>>>> Stashed changes
      <div style="position: relative;">
        <form method="post" action="shop_list.php">
        <input style="padding: 0.75rem; height: 3rem; width: 16rem; border: 2px solid black; border-radius: 1.5rem; margin: 1rem;" placeholder="search" type="text" name="search">
        <button class="fa-solid fa-magnifying-glass" style="cursor: pointer;font-size: 1.25rem; line-height: 1.75rem; position: absolute; right: 2rem; top: 1.5rem;" type="submit"></button>
      </form>
      </div>
      <i class="fa-solid fa-cart-shopping" style="font-size: 1.5rem; line-height: 2rem; margin: 1.5rem;"></i>
      <!-- ไอคอนรูปโปรไฟล์ -->
      <input type="checkbox" class="profile hidden" id="profile" name="profile">
      <label for="profile" class="m-3 mb-4">
        <i class="fa-regular fa-user" style="font-size: 1.5rem; line-height: 2rem; cursor: pointer;"></i>
      </label>
      <!-- submenu ที่ยื่นออกมา -->
<<<<<<< Updated upstream
      <div class="subpro hidden absolute top-20 mt-1 right-12 w-40 h-20 border-2 border-black bg-white flex flex-col justify-center content-center items-center text-center">
        <?php if($user_permission == 'customer'){?>
        <a class="h-10 p-1 w-full hover:bg-black hover:text-white hover:no-underline" href="">ประวัติการสั่งซื้อ</a>
=======
<<<<<<< HEAD
      <div class="subpro hidden absolute top-20 mt-1 right-12 w-40 h-20 border-2 border-black bg-white flex flex-col justify-center content-center items-center text-center z-10">
        <?php if($user_permission == 'customer'){?>
        <a class="h-10 p-1 w-full hover:bg-black hover:text-white hover:no-underline" href="/frontend_user/history_user.php">ประวัติการสั่งซื้อ</a>
=======
      <div class="subpro hidden absolute top-20 mt-1 right-12 w-40 h-20 border-2 border-black bg-white flex flex-col justify-center content-center items-center text-center">
        <?php if($user_permission == 'customer'){?>
        <a class="h-10 p-1 w-full hover:bg-black hover:text-white hover:no-underline" href="">ประวัติการสั่งซื้อ</a>
>>>>>>> ca6638568164aa6a90f0feab29be06d41e11f90a
>>>>>>> Stashed changes
        <a class="h-10 p-1 border-t-2 border-black w-full hover:bg-black hover:text-white hover:no-underline" href="logout.php">ออกจากระบบ</a>
      <?php } else if($user_permission == 'sales'){ ?>
        <a class="h-10 p-1 w-full hover:bg-black hover:text-white hover:no-underline" href="/frontend_user/history_user.php">รายการสั่งซื้อ</a>
        <a class="h-10 p-1 border-t-2 border-black w-full hover:bg-black hover:text-white hover:no-underline" href="logout.php">ออกจากระบบ</a>
      <?php } else if($user_permission == 'stock'){ ?>
        <a class="h-10 p-1 w-full hover:bg-black hover:text-white hover:no-underline" href="/add.php">เพิ่มสินค้า</a>
        <a class="h-10 p-1 border-t-2 border-black w-full hover:bg-black hover:text-white hover:no-underline" href="logout.php">ออกจากระบบ</a>
      <?php } else {?>
        <nav class="w-screen border-solid border-b-2 border-black" style="height: 85px;">
        <div class="grid grid-cols-2 w-full">
            <div class="pl-5">
                <img class="w-32 m-3"
                    src="https://cdn.discordapp.com/attachments/1020724048889659442/1097278386927321189/logo.png"
                    alt="">
            </div>
            <div class="flex flex-row justify-end items-end content-end pr-10">
                <a class="text-2xl m-6 font-semibold" href="">SHOP</a>
                <div class="relative">
                    <input class="p-3 h-12 w-64 border-2 border-solid border-black rounded-3xl m-4" placeholder="search"
                        type="text">
                    <i class="text-xl fa-solid fa-magnifying-glass absolute right-8 top-6"></i>
                </div>
                <i class="fa-solid fa-cart-shopping text-2xl m-6"></i>
                <button class="bg-[#9A9A9A] text-black px-7 py-3 mb-4 rounded-xl mr-2" type="submit">Register</button>
                <button class="bg-black text-white px-7 py-3 mb-4 rounded-xl" type="submit">Login</button>
            </div>
    </nav>
      <?php } ?>
      </div>

    </div>
  </div>
</nav>
<?php } else { ?>
  <nav class="w-screen border-solid border-b-2 border-black" style="height: 85px;">
        <div class="grid grid-cols-2 w-full">
            <div class="pl-5">
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
              <a  onclick="window.location.href = '/home.php';">
                <img class="w-32 m-3"
                    src="https://cdn.discordapp.com/attachments/1020724048889659442/1097278386927321189/logo.png"
                    alt="">
              </a>
                
            </div>
            <div class="flex flex-row justify-end items-end content-end pr-10">
                <a class="text-2xl m-6 font-semibold mb-7" onclick="window.location.href = '/shop_list.php';">SHOP</a>
                <div class="relative">
                    <input class="p-3 h-12 w-64 border-2 border-solid border-black rounded-3xl m-4" placeholder="search"
                        type="text">
                    <i class="text-xl fa-solid fa-magnifying-glass absolute right-10 top-8"></i>
                </div>
                <i class="fa-solid fa-cart-shopping text-2xl mb-8 mx-6"></i>
=======
>>>>>>> Stashed changes
                <img class="w-32 m-3"
                    src="https://cdn.discordapp.com/attachments/1020724048889659442/1097278386927321189/logo.png"
                    alt="">
            </div>
            <div class="flex flex-row justify-end items-end content-end pr-10">
                <a class="text-2xl m-6 font-semibold" href="">SHOP</a>
                <div class="relative">
                    <input class="p-3 h-12 w-64 border-2 border-solid border-black rounded-3xl m-4" placeholder="search"
                        type="text">
                    <i class="text-xl fa-solid fa-magnifying-glass absolute right-8 top-6"></i>
                </div>
                <i class="fa-solid fa-cart-shopping text-2xl m-6"></i>
<<<<<<< Updated upstream
=======
>>>>>>> ca6638568164aa6a90f0feab29be06d41e11f90a
>>>>>>> Stashed changes
                <button class="bg-[#9A9A9A] text-black px-7 py-3 mb-4 rounded-xl mr-2" type="submit" onclick="window.location.href = '/Register.php';">Register</button>
                <button class="bg-black text-white px-7 py-3 mb-4 rounded-xl" type="submit" onclick="window.location.href = '/login.php';">Login</button>
            </div>
    </nav>
<?php } ?>
