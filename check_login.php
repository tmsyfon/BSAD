<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "kkvintage") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");

if (isset($_POST["id"])) {
    $id = $_POST["id"];
}

$sql = "SELECT * FROM User WHERE user_id='".$id."'";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1){

    $row = mysqli_fetch_array($result);
     $_SESSION["user_id"] = $row["user_id"];
     Header("Location: next.html");

   } else {

     Header("Location: index.html");
   }
?>