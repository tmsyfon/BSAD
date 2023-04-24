<?php
require_once 'inc/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM regis_user WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row["id"];
    $_SESSION['permission'] = $row["Permission"];
    $_SESSION['username'] = $row["username"];
    header("Location: home.php");
} else {
    header("Location: login.php");
}
?>