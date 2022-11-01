<?php
require('dbconnect.php');

$sql = " Select * From employee";
$res = mysqli_query($conn,$sql);


$resRow = mysqli_fetch_assoc($res);

 print_r($resRow["fname"]);

$resRow = mysqli_fetch_assoc($res);
 print_r($resRow["id"]);
$resRow = mysqli_fetch_assoc($res);
 print_r($resRow["id"]);



?>