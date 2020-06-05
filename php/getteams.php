<?php
$groupid = $_REQUEST["groupid"];

include 'database_connect.php';

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM teszt.team WHERE year= 2020 AND group_id = ".$groupid;
$result = mysqli_query($conn,$sql);
$str ="";
$db=1;
$str="<option>Válassz...</option>";
while($row = mysqli_fetch_array($result)) {
    $str.="<option value='".$db."'>".$row['name']."</option>";
    $db++;
}
echo $str;
?>