<?php
require('dbconnect.php');

$sql = " Select * From employee";
$res = mysqli_query($conn,$sql);
$resRow = mysqli_fetch_row($res);


foreach ($resRow as $data){
    echo $data;
    echo "<br>";
}
$resRow = mysqli_fetch_row($res);
foreach ($resRow as $data){
    echo $data;
    echo "<br>";
}
$resRow = mysqli_fetch_row($res);
foreach ($resRow as $data){
    echo $data;
    echo "<br>";
}
$resRow = mysqli_fetch_row($res);
foreach ($resRow as $data){
    echo $data;
    echo "<br>";
}

?>