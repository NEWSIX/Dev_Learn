<?php
require('dbconnect.php');

$sql = " Select * From employee";
$res = mysqli_query($conn,$sql);

while($resRow=mysqli_fetch_row($res)){
    
    echo $resRow[0]."<br>";
    echo $resRow[1]."<br>";
    echo $resRow[2]."<br>";
    echo $resRow[3]."<br>";
    echo $resRow[4]."<br>";
    echo "<hr>";
}



?>