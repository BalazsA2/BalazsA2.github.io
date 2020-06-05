<?php
include 'database_connect.php';

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM teszt.team";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    /*echo $row['name'];*/
}
?>