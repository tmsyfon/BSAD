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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    * {
      font-family: 'Kanit', sans-serif;
    }
  </style>

  <title>Shopping cart</title>

</head>

<body class="flex flex-col justify-center items-center content-center">
  <nav class="w-screen border-solid border-b-2 border-black" style="height: 85px;">
    <div class="grid grid-cols-2 w-full">
      <div class="pl-5">
        <img class="w-32 m-3" src="http://localhost/BSAD/img/logo.png" alt="">
      </div>
      <div class="flex flex-row justify-end items-end content-end pr-10">
        <a class="text-2xl m-6 font-semibold" href="">SHOP</a>
        <div class="relative">
          <input class="p-3 h-12 w-64 border-2 border-solid border-black rounded-3xl m-4" placeholder="search"
            type="text">
          <i class="text-xl fa-solid fa-magnifying-glass absolute right-8 top-6"></i>
        </div>
        <i class="fa-solid fa-cart-shopping text-2xl m-6"></i>
        <i class="fa-regular fa-user text-2xl my-6 ml-3 mr-12"></i>
      </div>
    </div>
  </nav>

  <!------------>

  <div class="container py-10 grid grid-cols-5">


    <div class="col-span-3 p-4">
      <p class="text-2xl">Cart</p>
      <div class="grid-rows-2 w-full h-full">
        <?php if (!empty($cartData)): ?>
    <?php foreach ($cartData as $cartItem): ?>
      <div class="bg-[#EFEFEF] w-full h-52 p-4 grid grid-cols-5" data-id="<?php echo $cartItem['id'] ?>">
        <?php
        $add_id = $cartItem['id'];

        $img_query = "SELECT img_link FROM image WHERE add_id = $add_id LIMIT 1";
        $img_result = mysqli_query($conn, $img_query);
        $img_row = mysqli_fetch_assoc($img_result);
        $img_link = $img_row["img_link"];
        ?>
        <img src="http://localhost/BSAD/img/<?php echo $img_link;?>" class="col-span-1 w-44 h-44 border-2 border-[#000000]" alt="คำอธิบายรูปภาพ">
        <div class="col-span-1 p-4">
          <p class="text-xl"><?php echo $cartItem['name'] ?></p>
          <p class="text-xl">SIZE : <?php echo $cartItem['size'] ?></p>
          <button class="flex flex-row mt-20 delete-btn" data-id="<?php echo $cartItem['id'];?>">
            <i class="fa-solid fa-trash-can fa-lg mt-3 mr-2" style="color: #343434;"></i>
            <p class="underline decoration-2 ">Delete</p>
          </button>
        </div>
        <div class="col-span-1 p-4">
          <p>Price</p>
          <p><?php echo $cartItem['price'] ?></p>
        </div>
        <div class="col-span-1"></div>
        <div class="col-span-1"></div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

  <script>
    // หา DOM elements ของปุ่ม DELETE และใช้ loop ในการแอด event listener ให้กับทุกปุ่ม
    // ตัวอย่างโค้ด JavaScript เพื่อลบสินค้าออกจากตะกร้า
$(document).ready(function() {
  $('.delete-btn').on('click', function() {
    var cartItemId = $(this).closest('.grid').data('id');
    $.ajax({
      type: 'POST',
      url: 'delete_cart_item.php',
      data: { id: cartItemId },
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

        <div class="grid grid-cols-2">
          <div class="col-span-1">
            <button class="rounded-none border-2 border-[#000000] w-32 h-10 mt-2">เลือกสินค้าต่อ</button>
          </div>
          <div class="col-span-1 flex justify-end content-end items-end">
            <button class="rounded-none border-2 border-[#000000] w-32 h-10 mt-2">ลบสินค้าทั้งหมด</button>
          </div>
        </div>
      </div>
    </div>

    <div class="col-span-2 p-4">
      <div class="grid-rows-2 w-full h-80 mt-8 border border-[#000000] bg-[#EFEFEF]"></div>
    </div>

  </div>

  <script>
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
