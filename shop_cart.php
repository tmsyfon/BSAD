<html lang="en">
<?php
session_start();
if (isset($_POST['session'])) {
  $cartData = json_decode($_POST['session'], true);
} else {
  $cartData = $_SESSION['cart'] ?? array();
}
require_once 'connect.php';
?>

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!----- framework tailwind ----->
  <script src="https://cdn.tailwindcss.com"></script>

  <!----- fontawesome ----->
  <script src="https://kit.fontawesome.com/a935639c09.js" crossorigin="anonymous"></script>

  <!----- Kanit Font ----->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Kanit', sans-serif;
    }
  </style>

  <title>Shopping cart</title>

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
        <img class="w-32 m-3" src="https://cdn.discordapp.com/attachments/1020724048889659442/1097278386927321189/logo.png" alt="">
      </div>
      <div class="flex flex-row justify-end items-end content-end pr-10">
        <a class="text-2xl m-6 font-semibold" href="">SHOP</a>
        <div class="relative">
          <input class="p-3 h-12 w-64 border-2 border-solid border-black rounded-3xl m-4" placeholder="search" type="text">
          <i class="text-xl fa-solid fa-magnifying-glass absolute right-8 top-6"></i>
        </div>
        <i class="fa-solid fa-cart-shopping text-2xl m-6"></i>
        <!-- ไอคอนรูปโปรไฟลื -->
        <input type="checkbox" class="profile hidden" id="profile" name="profile">
        <label for="profile" class="m-3 mb-6">
          <i class="fa-regular fa-user" style="font-size: 1.5rem; line-height: 2rem;"></i>
        </label>
        <!-- submenu ที่ยื่นออกมา -->
        <div class="subpro hidden absolute top-20 mt-1 right-12 w-40 h-20 border-2 border-black bg-white flex flex-col justify-center content-center items-center text-center">
          <a class="h-10 p-1 w-full hover:bg-black hover:text-white hover:no-underline" href="">History Order</a>
          <a class="h-10 p-1 border-t-2 border-black w-full hover:bg-black hover:text-white hover:no-underline" href="">Log out</a>
        </div>
      </div>
    </div>
  </nav>

  <!------------>
  <form method="post" action="order_user.php">
    <div class="container py-10 grid grid-cols-5 p-8">

      <div class="col-span-3 p-4">
        <p class="text-3xl mb-3">Cart</p>
        <?php if (!empty($cartData)) :
          $totalPrice = 0; // เริ่มต้นค่า $totalPrice ให้เป็น 0
          foreach ($cartData as $cartItem) :
            $totalPrice += $cartItem['price']; // รวมราคาสินค้าในตัวแปร $totalPrice
            $allprice = $totalPrice + 50;
        ?>
            <div class="bg-[#EFEFEF] w-full h-52 p-4 grid grid-cols-5" data-id="<?php echo $cartItem['id'] ?>">
              <?php
              $add_id = $cartItem['id'];

              $img_query = "SELECT img_link FROM image WHERE add_id = $add_id LIMIT 1";
              $img_result = mysqli_query($conn, $img_query);
              $img_row = mysqli_fetch_assoc($img_result);
              $img_link = $img_row["img_link"];
              ?>
              <div class="col-span-1 w-44 h-44 border-2 border-black">
                <img src="http://localhost/BSAD/img/<?php echo $img_link; ?>" class="col-span-1 w-44 h-44 border-2 border-[#000000]" alt="">
              </div>
              <div class="col-span-2 pl-8 pt-2">
                <p class="text-xl"><?php echo $cartItem['name'] ?></p>
                <p class="text-md">SIZE : <?php echo $cartItem['size'] ?></p>
                <button class="flex flex-row mt-20 delete-btn" data-id="<?php echo $cartItem['id']; ?>">
                  <i class="fa-solid fa-trash-can fa-lg mt-3 mr-2" style="color: #343434;"></i>
                  <p class="underline decoration-2 ">Delete</p>
                </button>
              </div>
              <div class="col-span-2 p-4 grid grid-cols-3 text-center">
                <p class="mt-1.5">฿ <?php echo $cartItem['price']; ?></p>
                <input class="h-9 border-2 border-black text-center" value="1" type="number" onchange="updateTotalPrice(this)">
                <p class="mt-1.5">฿ <span class="total-price"></span></p>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
        <script>
          function updateTotalPrice(input) {
            var price = <?php echo $cartItem['price']; ?>;
            var quantity = input.value;
            var totalPrice = price * quantity;
            var totalElement = input.parentNode.nextElementSibling.querySelector('.total-price');
            if (totalElement !== null) {
              totalElement.innerHTML = totalPrice.toFixed(2);
            }
          }
        </script>
        <script>
          // หา DOM elements ของปุ่ม DELETE และใช้ loop ในการแอด event listener ให้กับทุกปุ่ม
          // ตัวอย่างโค้ด JavaScript เพื่อลบสินค้าออกจากตะกร้า
          $(document).ready(function() {
            $('.delete-btn').on('click', function() {
              var cartItemId = $(this).closest('.grid').data('id');
              $.ajax({
                type: 'POST',
                url: 'delete_cart_item.php',
                data: {
                  id: cartItemId
                },
                success: function() {
                  location.reload(); // โหลดหน้าเว็บใหม่เพื่ออัพเดทข้อมูลในตะกร้า
                },
                error: function() {
                  alert('An error occurred. Please try again later.');
                }
              });
            });
          });
        </script>

        <div class="grid grid-cols-2 mt-3">
          <div class="col-span-1">
            <button class="rounded-none border-2 border-[#000000] w-32 h-10 mt-2 hover:text-white hover:bg-black">เลือกสินค้าต่อ</button>
          </div>
          <div class="col-span-1 flex justify-end content-end items-end">
            <button class="rounded-none border-2 border-[#000000] w-32 h-10 mt-2 hover:text-white hover:bg-black">ลบสินค้าทั้งหมด</button>
          </div>
        </div>

      </div>
      <div class="col-span-2 p-4 flex flex-col justify-center items-center content-center">
        <div class="w-10/12 h-80 mt-8 border-2 border-black bg-[#EFEFEF] p-7">
          <div class="grid grid-cols-2 p-3">
            <p>product price</p>
            <p class="text-end">฿ <?php echo $totalPrice; ?></p>
          </div>
          <div class="grid grid-cols-2 p-3">
            <p>delivery fee</p>
            <p class="text-end">฿ 50</p>
          </div>
          <div class="grid grid-cols-2 p-3">
            <p><b>Total</b></p>
            <p class="text-end"><b>฿ <?php echo $allprice; ?></b></p>
          </div>
          <button id="order-btn" class="w-full text-center bg-black text-white h-11 mt-10 hover:text-black hover:bg-white hover:border-2 hover:border-black">ORDER</button>
        </div>
      </div>

    </div>
  </form>
  <?php

  $_SESSION['add_id'] = $add_id;
  $_SESSION['totalPrice'] = $totalPrice;
  $_SESSION['allprice'] = $allprice;
  ?>
  <script>
    // ดักจับการคลิกปุ่ม ORDER
    const orderBtn = document.getElementById('order-btn');
    orderBtn.addEventListener('click', function() {
      // ส่งข้อมูลผ่านการเรียกใช้งานฟังก์ชัน Ajax
      const xhr = new XMLHttpRequest();
      const url = 'order_user.php'; // ตัวอย่าง URL ของหน้าถัดไป
      const data = {
        add_id: '<?php echo $add_id; ?>',
        totalPrice: '<?php echo $totalPrice; ?>',
        allprice: '<?php echo $allprice; ?>'
      };
      xhr.open('POST', url, true);
      xhr.setRequestHeader('Content-Type', 'application/json');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          console.log(xhr.responseText);
        }
      };
      xhr.send(JSON.stringify(data));
    });

    function deleteItem() {
      const parentElement = event.target.parentElement.parentElement.parentElement;
      const cartItemId = parentElement.getAttribute('data-id');
      parentElement.remove();

      // Send an AJAX request to server to remove the item from cart.
      <?php
      // ตัวอย่างการเขียน PHP สำหรับการลบสินค้าออกจากตะกร้าสินค้า
      session_start(); // เริ่มต้น session ของ PHP
      $cartData = $_SESSION['cartData'];
      foreach ($cartData as $key => $cartItem) {
        if ($cartItem['id'] == $cartItemId) {
          unset($cartData[$key]);
          $_SESSION['cartData'] = $cartData;
          break;
        }
      }
      ?>
    }
  </script>
</body>

</html>