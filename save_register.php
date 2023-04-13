<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

<?php include('connect.php');

//สร้างตัวแปร
$id = $_POST['id'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Phone = $_POST['Phone'];
$House = $_POST['House'];
$Province = $_POST['Province'];
$District = $_POST['District'];
$Subdistrict = $_POST['Subdistrict'];
$Postalcode = $_POST['Postalcode'];

//เพิ่มข้อมูล
$sql = " INSERT INTO regis_user
	(id, Username, Password, Firstname, Lastname, Phone, House, Province, District, Subdistrict, Postalcode)
	VALUES
	('$id', '$Username', '$Password', '$Firstname', '$Lastname', '$Phone', '$House', '$Province', '$District', '$Subdistrict', '$Postalcode')";

$result = mysqli_query($connect, $sql) or die("Error in query: $sql " . mysqli_error($connect));


//ปิดการเชื่อมต่อ database
mysqli_close($connect);




//ถ้าสำเร็จให้ขึ้นอะไร
if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Register Success');";
    echo "window.location = 'home1.html';";
    echo "</script>";
} else {
    //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม
    echo "<script type='text/javascript'>";
    echo "alert('error!');";
    echo "window.location = 'indexhtml; ";
    echo "</script>";
}


?>