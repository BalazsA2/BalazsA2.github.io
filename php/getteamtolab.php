<?php
$groupid = $_REQUEST["groupid"];
$limit = $_REQUEST["limit"];

include 'database_connect.php';

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM teszt.team WHERE year= 2020 AND group_id = ".$groupid." LIMIT ".($limit - 1).",1";
$result = mysqli_query($conn,$sql);
$str ="";
while($row = mysqli_fetch_array($result)) {
    $str=$row['name'];
}
echo $str;
?>