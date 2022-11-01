<?php
require('dbconnect.php');

$sql = " Select * From employee";
$res = mysqli_query($conn,$sql);

$count = mysqli_num_rows($res);


for($i= 0 ; $i<$count;$i++){
    $resRow = mysqli_fetch_object($res);
    echo $resRow->id."<br>";
    echo $resRow->fname."<br>";
    echo $resRow->lname."<br>";
    echo $resRow->gender."<br>";
    echo $resRow->skill."<br>";
    echo "<hr>";
}



?>