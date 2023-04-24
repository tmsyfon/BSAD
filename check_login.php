<?php
require_once 'inc/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM regis_user WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: home.php");
} else {
    header("Location: login.php");
}
?>