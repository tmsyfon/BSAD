<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$user_permission = $_SESSION['permission'];
$orders_id = $_GET['order_id'];
require_once 'connect.php';

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
        <div class="w-full grid grid-cols-2">
          <?php
          $sql = "SELECT * FROM view_orders_user WHERE orders_id = '$orders_id' ORDER BY order_date DESC";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $firstname = $row['Firstname'];
            $lastname = $row['Lastname'];
            $address = $row['address'];
            $phone = $row['Phone'];
            $order_date = $row['order_date'];

          ?>
            <div class="w-full p-5">
                <div class="grid grid-cols-4 w-full p-5 ">
                    <div class="w-full col-span-1">
                        <div class="border-2 border-black h-10 w-7/12 text-center">
                            <p class="text-2xl font-bold">#<?php echo $orders_id; ?></p>
                        </div>
                    </div>

                </div>
                <div class="grid grid-cols-4 w-full p-5">
                    <div class="w-full col-span-1">
                        <p>NAME :</p>
                    </div>
                    <div class="w-full col-span-3">
                        <p class="text-start"><?php echo $firstname.' '.$lastname; ?></p>
                    </div>
                </div>
                <div class="grid grid-cols-4 w-full h-32 p-5">
                    <div class="w-full col-span-1">
                        <p>ADDRESS :</p>
                    </div>
                    <div class="w-full col-span-3">
                        <p class="text-start"><?php echo $address; ?></p>
                    </div>
                </div>
                <div class="grid grid-cols-4 w-full p-5">
                    <div class="w-full col-span-1">
                        <p>PHONE :</p>
                    </div>
                    <div class="w-full col-span-3">
                        <p class="text-start"><?php echo $phone; ?></p>
                    </div>
                </div>
                <div class="grid grid-cols-4 w-full p-5">
                    <div class="w-full col-span-1">
                        <p>Tracking Number :</p>
                    </div>
                    <div class="w-full col-span-3 flex flex-row">
                      <form action="save-data.php" method="post">
                        <input type="hidden" name="orders_id" value="<?php echo $orders_id; ?>">
                        <input type="text" name="tracking" class="border-2 h-10 border-black p-3" value="">
                        <button type="submit" class="bg-black text-white rounded-lg w-20 ml-2 hover:bg-white hover:text-black hover:border-2 hover:border-black">submit</button>
                      </form>
                    </div>
                </div>
                <div class="grid grid-cols-4 w-full p-5">
                    <div class="w-full col-span-1">
                        <p>ORDER DATE :</p>
                    </div>
                    <div class="w-full col-span-1">
                        <p><?php echo $order_date; ?></p>
                    </div>
                    <div class="w-full col-span-2 flex flex-row tems-end content-end justify-end">
                        <div class="w-36 h-10 rounded-xl bg-green-600 text-center items-center content-center justify-center flex flex-col text-white">status paymernt</div>
                    </div>
                </div>
            </div>


            <div class="w-full p-5 ">
              <?php
            }


              ?>
                <div class="">

                    <div class="w-full overflow-auto" style="height: 450px;">
                      <?php
                      $sql1 = "SELECT * FROM view_order WHERE orders_id = '$orders_id' ORDER BY order_date DESC";
                      $result1 = mysqli_query($conn, $sql1);
                      $total_price = 0;
                      while ($row1 = mysqli_fetch_assoc($result1)) {
                        $add_name = $row1['add_name'];
                        $add_price = $row1['add_price'];
                        $total_price += $add_price; // เพิ่ม $add_price เข้าไปใน $total_price
                      ?>
                        <div class="grid grid-cols-7 border-b border-solid border-black p-3 text-center">
                            <img class="bg-gray-200 w-24 h-24 col-span-1" src="" alt="">
                            <div class="col-span-4 text-center items-center content-center justify-center flex"><?php echo $add_name; ?></div>
                            <div class="col-span-1 text-center items-center content-center justify-center flex">1</div>
                            <div class="col-span-1 text-center items-center content-center justify-center flex"><?php echo $add_price; ?></div>
                        </div>
                        <?php
                          }
                         ?>
                    </div>
                    <form method="post" action="save-status.php">
                    <div class="w-full h-full mt-3 p-5 items-center content-center justify-center flex flex-col">
                        <div class="w-full grid grid-cols-2">
                            <div class="text-start text-xl">
                                <p>Total</p>
                            </div>
                            <div class="text-end text-xl">
                                <p><?php echo $total_price; ?></p>
                            </div>
                        </div>
                    
                        <div class="w-full col-span-3 flex flex-row tems-start content-start justify-start">
                          <input type="hidden" name="orders_id" value="<?php echo $_GET['order_id']; ?>">
                            <select class="border-2 border-black w-9/12 h-10" name="status" id="">
                                <option value="pending">pending</option>
                                <option value="complete">complete</option>
                            </select>
                        </div>
                        <button class="w-32 h-12 bg-black text-white mt-10 rounded-lg hover:bg-neutral-500">บันทึก</button>
                    </div>
                  </form>

                </div>

            </div>

        </div>
    </div>
</body>
</html>
