<?php
require('dbconnect.php');

$sql = " Select * From employee";
$res = mysqli_query($conn,$sql);


$resRow = mysqli_fetch_array($res,MYSQLI_ASSOC);


print_r($resRow);



?>