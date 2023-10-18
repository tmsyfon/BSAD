<!DOCTYPE html>
<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once 'connect.php';
$orders_id = $_GET['order_id'];
$delivery = 50;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://kit.fontawesome.com/4a5bb73cc5.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4a5bb73cc5.js" crossorigin="anonymous"></script>
</head>
<body class="flex flex-col justify-center items-center content-center">
    <nav class="w-screen border-solid border-b-2 border-black" style="height: 85px;">
        <div class="grid grid-cols-2 w-full">
            <div class="pl-5">
                <img class="w-32 m-3" src="https://cdn.discordapp.com/attachments/1020724048889659442/1097278386927321189/logo.png" alt="">
            </div>
            <div class="flex flex-row justify-end items-end content-end pr-10">
<<<<<<< Updated upstream
                <a class="text-2xl m-6 font-semibold" href="">SHOP<?php echo $orders_id; ?></a>
=======
<<<<<<< HEAD
                <a class="text-2xl m-6 font-semibold" href="">SHOP</a>
=======
                <a class="text-2xl m-6 font-semibold" href="">SHOP<?php echo $orders_id; ?></a>
>>>>>>> ca6638568164aa6a90f0feab29be06d41e11f90a
>>>>>>> Stashed changes
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
    <div class="container flex flex-col justify-start items-start content-start p-10">
        <p class="text-3xl mb-3">DETAIL ORDER</p>
        <hr class="w-full border border-solid border-black">

        <!-- กล่องรายละเอียดคำสั่งซื้อ -->
        <div class="w-full h-full border-2 border-solid border-black mt-5 p-3">
            <?php

            $sql = "SELECT * FROM orders WHERE orders_id = '$orders_id' ORDER BY order_date DESC";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {


            ?>
            <p class="text-xl"> date : <b><?php echo $row['order_date'].' น.'; ?></b></p>

            <div class="flex flex-row mt-3">
                <i class="fa-sharp fa-solid fa-box pt-1 pr-2"></i>
                <p>Order Summary</p>
            </div>

            <div class="w-full h-full border-2 border-solid border-black mt-5 grid grid-rows-3">
                <div class="row-span-1 w-full h-full border-b-2 border-solid border-black py-1 px-2">ADDRESS</div>
                <div class="row-span-2 w-full h-full p-1"><?php echo $row['address']; ?></div>
            </div>

            <div class="grid grid-cols-2 w-full h-full mt-3">
                <div class="pr-1">
                    <div class="w-full h-full border-2 border-solid border-black grid grid-rows-2">
                        <div class="w-full h-full border-b-2 border-solid border-black py-1 px-2">TRACKING NUMBER</div>
                        <div class="w-full h-full p-1"><?php echo $row['tracking']; ?></div>
                    </div>
                </div>
                <div class="pl-1">
                    <div class="w-full h-full border-2 border-solid border-black grid grid-rows-2">
                        <div class="w-full h-full border-b-2 border-solid border-black py-1 px-2">PAYMENT</div>
                        <div class="w-full h-full p-1"><?php echo 'ธนาคาร'.$row['payment']; ?></div>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-7 mt-3 bg-gray-300 p-2">
                <div class="col-span-4 text-center">PRODUCT</div>
                <div class="col-span-1 text-center">PRICE</div>
                <div class="col-span-1 text-center">AMOUNT</div>
                <div class="col-span-1 text-center">TOTAL</div>
            </div>

            <!-- รายการสินค้า -->
            <div class="grid grid-cols-7 mt-1 border-b border-solid border-gray-300 p-2">
                <?php
                // $sql1 = "SELECT vo.*, i.img_link FROM view_order vo INNER JOIN image i ON vo.add_id = i.add_id WHERE vo.id = '$user_id' AND orders_id = '$orders_id' ORDER BY vo.order_date DESC LIMIT 1";
                $sql1 = "SELECT * FROM view_order WHERE id = '$user_id' AND orders_id = '$orders_id'";
                $result1 = mysqli_query($conn, $sql1);
                while ($row1 = mysqli_fetch_assoc($result1)) {
                  // $img_link = $row1['img_link'];

                ?>
                <div class="col-span-4 text-center grid grid-cols-7">
<<<<<<< Updated upstream
                    <div class="col-span-1">
                        <!-- <img class="bg-gray-200 w-20 h-20" src="http://localhost/BSAD/img/<?php echo $img_link;?>" alt=""> -->
                    </div>
=======
<<<<<<< HEAD
                    <!-- <div class="col-span-1">
                        <img class="bg-gray-200 w-20 h-20" src="http://localhost/img/<?php echo $img_link;?>" alt="">
                    </div> -->
=======
                    <div class="col-span-1">
                        <!-- <img class="bg-gray-200 w-20 h-20" src="http://localhost/BSAD/img/<?php echo $img_link;?>" alt=""> -->
                    </div>
>>>>>>> ca6638568164aa6a90f0feab29be06d41e11f90a
>>>>>>> Stashed changes
                    <div class="col-span-6 text-start">
                        <p><?php echo $row1['add_name']; ?></p>
                        <p class="text-gray-400">Size : <?php echo $row1['add_size']; ?> </p>
                    </div>
                </div>
                <div class="col-span-1 text-center"><?php echo $row1['add_price'];?></div>
                <div class="col-span-1 text-center">1</div>
                <div class="col-span-1 text-center"><?php echo $row1['add_price'];?></div>
                <?php
              }
                ?>
            </div>

            <div class="grid grid-cols-7 mt-3 bg-gray-300 p-2">
                <div class="col-span-5 text-center"></div>
                <div class="col-span-1 text-end">
                    <p>Total</p>
                    <p>Delivery Fee</p>
                    <p>Net Balance</p>
                </div>
                <div class="col-span-1 text-end">
                  <?php
                  $order1_price = $row['order_price'];
                  $total =  $order1_price - $delivery;
                  ?>
                    <p><?php echo $total.' ';?>baht</p>
                    <p><?php echo $delivery.' '; ?> baht</p>
                    <p><?php echo $row['order_price'].' '; ?>baht</p>
                </div>
            </div>
            <?php

          }
            ?>

        </div>
        <!---->

        <button onclick="window.location.href = '/home.php';"class="p-3 text-xl rounded-xl bg-black text-white mt-6">back to home</button>
    </div>
</body>
</html>
