<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once 'inc/connect.php';
?>

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

    input.menu:checked~.submenu {
        display: flex;
    }

    input[type=range] {
        height: 38px;
        -webkit-appearance: none;
        margin: 10px 0;
        width: 100%;
        background-color: transparent;
    }

    input[type=range]:focus {
        outline: none;
    }

    input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 10px;
        cursor: pointer;
        animation: 0.2s;
        box-shadow: 1px 1px 1px #000000;
        background: #9C9C9C;
        border-radius: 5px;
        border: 1px solid #000000;
    }

    input[type=range]::-webkit-slider-thumb {
        box-shadow: 1px 1px 1px #000000;
        border: 1px solid #000000;
        height: 30px;
        width: 15px;
        border-radius: 5px;
        background: #FFFFFF;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -11px;
    }

    input[type=range]:focus::-webkit-slider-runnable-track {
        background: #9C9C9C;
    }

    input[type=range]::-moz-range-track {
        width: 100%;
        height: 10px;
        cursor: pointer;
        animation: 0.2s;
        box-shadow: 1px 1px 1px #000000;
        background: #9C9C9C;
        border-radius: 5px;
        border: 1px solid #000000;
    }

    input[type=range]::-moz-range-thumb {
        box-shadow: 1px 1px 1px #000000;
        border: 1px solid #000000;
        height: 30px;
        width: 15px;
        border-radius: 5px;
        background: #FFFFFF;
        cursor: pointer;
    }

    input[type=range]::-ms-track {
        width: 100%;
        height: 10px;
        cursor: pointer;
        animation: 0.2s;
        background: transparent;
        border-color: transparent;
        color: transparent;
    }

    input[type=range]::-ms-fill-lower {
        background: #9C9C9C;
        border: 1px solid #000000;
        border-radius: 10px;
        box-shadow: 1px 1px 1px #000000;
    }

    input[type=range]::-ms-fill-upper {
        background: #9C9C9C;
        border: 1px solid #000000;
        border-radius: 10px;
        box-shadow: 1px 1px 1px #000000;
    }

    input[type=range]::-ms-thumb {
        margin-top: 1px;
        box-shadow: 1px 1px 1px #000000;
        border: 1px solid #000000;
        height: 30px;
        width: 15px;
        border-radius: 5px;
        /* background: #FFFFFF; */
        cursor: pointer;
    }

    input[type=range]:focus::-ms-fill-lower {
        background: #9C9C9C;
    }

    input[type=range]:focus::-ms-fill-upper {
        background: #9C9C9C;
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
                <!-- ไอคอนรูปโปรไฟล์ -->
                <input type="checkbox" class="profile hidden" id="profile" name="profile">
                <label for="profile" class="m-3 mb-6">
                    <i class="fa-regular fa-user" style="font-size: 1.5rem; line-height: 2rem;"></i>
                </label>
                <!-- submenu ที่ยื่นออกมา -->
                <div class="subpro hidden absolute top-20 mt-1 right-12 w-40 h-20 border-2 border-black bg-white flex flex-col justify-center content-center items-center text-center">
                    <a class="h-10 p-1 w-full hover:bg-black hover:text-white hover:no-underline" href="">History
                        Order</a>
                    <a class="h-10 p-1 border-t-2 border-black w-full hover:bg-black hover:text-white hover:no-underline" href="">Log out</a>
                </div>
            </div>
        </div>
    </nav>
    <?php
    // คำสั่ง SQL query เพื่อดึงข้อมูลจากตาราง products
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    ?>
    <div class="container py-10 grid grid-cols-8">

        <div class="col-span-2">
            <div class="box-content w-64 p-4 border-solid border-2 border-[#000000] shadow-md ml-10  rounded-xl" style="height: 500px;">

                <div class="mt-5">
                    <input id="era" type="checkbox" name="menu" class="menu hidden" />
                    <label for="era" class="cursor-pointer"><b>ERA</b></label>

                    <div class="submenu hidden flex flex-col">
                        <div>
                            <input id="1970" class="checked:bg-gray-300" type="checkbox">
                            <label for="1970">1970S</label>
                        </div>
                        <div>
                            <input id="1980" class="checked:bg-gray-300" type="checkbox">
                            <label for="1980">1980S</label>
                        </div>
                        <div>
                            <input id="1990" class="checked:bg-gray-300" type="checkbox">
                            <label for="1990">1990S</label>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <input id="price" type="checkbox" name="menu" class="menu hidden" />
                    <label for="price" class="cursor-pointer"><b>PRICE</b></label>

                    <div class="submenu hidden flex flex-col">
                        <p> 0 - <output id="value">500</output></p>
                        <input id="price" type="range" max="9000" value="500" list="markers" oninput="show(this)">

                        <datalist id="markers">
                            <option value="0"></option>
                            <option value="1000"></option>
                            <option value="2000"></option>
                            <option value="3000"></option>
                            <option value="4000"></option>
                            <option value="5000"></option>
                            <option value="6000"></option>
                            <option value="7000"></option>
                            <option value="8000"></option>
                            <option value="9000"></option>
                        </datalist>

                        <script>
                            function show(element) {
                                let val = element.value;
                                document.querySelector(`#value`).innerHTML = `${parseInt(val)}`;
                                console.log(val)
                            }
                        </script>
                    </div>
                </div>

                <div class="mt-5">
                    <input id="size" type="checkbox" name="menu" class="menu hidden" />
                    <label for="size" class="cursor-pointer"><b>SIZE</b></label>

                    <div class="submenu hidden flex flex-col">
                        <div>
                            <input id="era1" class="checked:bg-gray-300" type="checkbox">
                            <label for="era1">S</label>
                        </div>
                        <div>
                            <input id="era1" class="checked:bg-gray-300" type="checkbox">
                            <label for="era1">M</label>
                        </div>
                        <div>
                            <input id="era1" class="checked:bg-gray-300" type="checkbox">
                            <label for="era1">L</label>
                        </div>
                        <div>
                            <input id="era1" class="checked:bg-gray-300" type="checkbox">
                            <label for="era1">XL</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-span-6 text-2xl pr-14">
            <div class="grid grid-cols-12">
                <p class="col-span-2">ALL PRODUCT</p>
                <hr class="col-span-10 mt-4 border-t-2 border-solid border-black">
            </div>

            <div class="grid grid-cols-4 mt-6 gap-5">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="w-full cursor-pointer">
                            <div class="p-3 w-full h-80 border-black border-2 border-solid flex flex-col justify-center items-center content-center">
                                <img class="w-full h-64 mb-3 overflow-hidden" src="https://cdn.discordapp.com/attachments/1020724048889659442/1098322374346158150/pic1-1.jpg" alt="">
                                <p class="text-xl font-semibold"><?php echo $row["add_name"]; ?></p>
                                <p class="text-lg"><?php echo $row["add_price"]; ?></p>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

        </div>


    </div>

</body>
<script>

</script>

</html>