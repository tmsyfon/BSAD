 <!DOCTYPE html>
 <html lang="en">
 <?php
session_start();

require_once 'connect.php';
$add_ids = $_SESSION['add_ids'];
$totalPrice = $_SESSION['totalPrice'];
$allprice = $_SESSION['allprice'];
$delivery = 50;
// ตรวจสอบว่ามีค่าใน session หรือไม่ก่อนใช้งาน เพื่อป้องกัน error
if(!isset($add_ids) || !isset($totalPrice) || !isset($allprice)) {
    // กรณีไม่มีค่าใน session ให้ redirect ไปยังหน้าที่ต้องการ
    header("Location: หน้าที่ต้องการไป");
    exit;
}

?>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://kit.fontawesome.com/4a5bb73cc5.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4a5bb73cc5.js" crossorigin="anonymous"></script>
 </head>
 <style>
    input.ksk:checked~.img_ksk {
        opacity: 100%;
    }

    input.ktb:checked~.img_ktb {
        opacity: 100%;
    }

    input.scb:checked~.img_scb {
        opacity: 100%;
    }

    input.bkk:checked~.img_bkk {
        opacity: 100%;
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
      <form method="post" action="save_order.php">
        <div class="w-full grid grid-cols-2">

            <div class="w-full p-5">
                <div class="flex flex-row">
                    <i class="fa-sharp fa-solid fa-location-dot pr-2 text-lg"></i>
                    <p class="mb-3 text-lg">ADDRESS</p>
                </div>
                <textarea class="w-full h-56 border-2 border-solid border-black p-3" name="address"></textarea>

                <div class="flex flex-row mt-3">
                    <i class="fa-solid fa-wallet pr-2 text-lg"></i>
                    <p class="mb-3 text-lg">Payment</p>
                </div>

                <div class="flex flex-row">
                    <input id="ksk" type="radio" name="bank" class="ksk hidden" value="กสิกร">
                    <label for="ksk" class="border-2 border-black w-28 m-3 img_ksk opacity-50">
                        <img class="cursor-pointer w-full" src="https://cdn.discordapp.com/attachments/1020724048889659442/1099722223004160050/KBANK-LOGO.png" alt="">
                    </label>

                    <input id="ktb" type="radio" name="bank" class="ktb hidden" value="กรุงไทย">
                    <label for="ktb" class="border-2 border-black w-28 m-3 img_ktb opacity-50">
                        <img class="cursor-pointer w-full" src="https://cdn.discordapp.com/attachments/1020724048889659442/1099722223209685112/IMG_35719_20201006093532000000.png" alt="">
                    </label>

                    <input id="scb" type="radio" name="bank" class="scb hidden" value="ไทยพาณิชย์">
                    <label for="scb" class="border-2 border-black w-28 m-3 img_scb opacity-50">
                        <img class="cursor-pointer w-full" src="https://cdn.discordapp.com/attachments/1020724048889659442/1099722223465529354/siam-commercial-bank-scb-logo.png" alt="">
                    </label>

                    <input id="bkk" type="radio" name="bank" class="bkk hidden" value="กรุงเทพ">
                    <label for="bkk" class="border-2 border-black w-28 m-3 img_bkk opacity-50">
                        <img class="cursor-pointer w-full" src="https://cdn.discordapp.com/attachments/1020724048889659442/1099722222765080707/ad8e2ee0c8e2d7ecc680af556d2c83a0.png" alt="">
                    </label>
                </div>
            </div>

            <div class="w-full p-5 ">
                <div class="flex flex-row mb-3">
                    <i class="fa-sharp fa-solid fa-box pr-2 text-lg"></i>
                    <p class="text-lg">Order Summary</p>
                </div>

                <div class="">

                    <div>
                      <?php

                      $_SESSION['id_list'] = $add_ids;
                      // แปลง Array เป็น String โดยใช้ตัวคั่นเป็นเครื่องหมายจุลภาค
                      $id_list = implode(',', $add_ids);

                      // เก็บตัวแปร $id_list ลงใน session
                      // $_SESSION['id_list'] = $id_list;

                      // สร้างคำสั่ง SQL พร้อมผูกค่าพารามิเตอร์
                      $sql = "SELECT * FROM product WHERE add_id IN ($id_list)";
                      $stmt = $pdo->prepare($sql);
                      $stmt->execute();

                      // ดึงข้อมูลจากฐานข้อมูล
                      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                      // วนลูปแสดงผลข้อมูล
                      foreach ($data as $item) {
                        $add_id = $item['add_id'];

                        $img_query = "SELECT img_link FROM image WHERE add_id = $add_id LIMIT 1";
                        $img_result = mysqli_query($conn, $img_query);
                        $img_row = mysqli_fetch_assoc($img_result);
                        $img_link = $img_row["img_link"];
                        $_SESSION['add_price'] = $item['add_price'];
<<<<<<< Updated upstream
                      

                      ?>
                        <div class="grid grid-cols-4 border-b border-solid border-black p-3">
                            <img class="bg-gray-200 w-32 h-32 col-span-1" src="http://localhost/BSAD/img/<?php echo $img_link;?>" alt="">
                            <div class="col-span-3">
=======
<<<<<<< HEAD


                      ?>
                        <div class="grid grid-cols-4 border-b border-solid border-black p-3">
                            <img class="bg-gray-200 w-32 h-32 col-span-1" src="http://localhost/img/<?php echo $img_link;?>" alt="">
                            <div class="col-span-3">
                                <p class="text-end"><?php echo $item['add_name'];?></p>
                                <!-- <p>amount</p> -->
                                <!-- <p><?php echo $item['add_price'];?></p> -->
                                <br>
                                <p class="text-end"><b>total : <?php echo $item['add_price'];?></b></p>
=======
                      

                      ?>
                        <div class="grid grid-cols-4 border-b border-solid border-black p-3">
                            <img class="bg-gray-200 w-32 h-32 col-span-1" src="http://localhost/BSAD/img/<?php echo $img_link;?>" alt="">
                            <div class="col-span-3">
>>>>>>> Stashed changes
                                <p><?php echo $item['add_name'];?></p>
                                <p>amount</p>
                                <p><?php echo $item['add_price'];?></p>
                                <br>
                                <p class="text-end"><b>total : </b></p>
>>>>>>> ca6638568164aa6a90f0feab29be06d41e11f90a
                            </div>
                        </div>
                        <?php
                      }
                        ?>
                    </div>

                    <div class="w-full h-48 bg-gray-300 mt-3 p-5 items-center content-center justify-center flex flex-col">
                        <div class="w-full grid grid-cols-2">
                            <div class="text-start">
                                <p>Total</p>
                                <p>Delivery Fee</p>
                                <p>Net Balance</p>
                            </div>
                            <div class="text-end">
                                <p><?php echo '฿'.$totalPrice; ?></p>
                                <p><?php echo '฿'.$delivery; ?></p>
                                <p><?php echo '฿'.$allprice; ?></p>
                            </div>
                        </div>
                        <input type="hidden" name="add_name" value="<?php echo $item['add_name']; ?>">
                        <input type="hidden" name="add_price" value="<?php echo $item['add_price']; ?>">
                        <input type="hidden" name="order_price" value="<?php echo $allprice; ?>">

                        <button class="w-9/12 h-12 bg-black text-white mt-10 rounded-lg hover:bg-green-700">CONFIRM ORDER</button>
                    </div>
                  </form>
                </div>

            </div>
        </div>
    </div>
 </body>
 </html>
