<?php
include_once ('../inc/connect.php');
$sql = "SELECT
t1.`code`,
t1.name_th
FROM
district AS t1
WHERE SUBSTR(t1.`code`,1,2) = '".substr($_POST['id'],0,2)."'
ORDER BY CONVERT (t1.name_th USING tis620) ASC";
$result = mysqli_query($conn, $sql);
?>
<?php
$cnt = 0;
foreach ($result as $index => $value) :
    $arr[$cnt]['code'] = $value['code'];
    $arr[$cnt]['name'] = $value['name_th'];
    $cnt++;
endforeach;
echo json_encode($arr);
?>