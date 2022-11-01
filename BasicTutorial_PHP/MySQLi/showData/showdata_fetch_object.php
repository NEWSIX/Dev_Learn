<?php
require('dbconnect.php');

$sql = " Select * From employee";
$res = mysqli_query($conn,$sql);


$resRow = mysqli_fetch_object($res);
echo $resRow->id."<br>";
echo $resRow->fname."<br>";
echo $resRow->lname."<br>";
echo $resRow->gender."<br>";
echo $resRow->skill."<br>";
echo "<hr>";
$resRow = mysqli_fetch_object($res);
echo $resRow->id."<br>";
echo $resRow->fname."<br>";
echo $resRow->lname."<br>";
echo $resRow->gender."<br>";
echo $resRow->skill."<br>";
echo "<hr>";
$resRow = mysqli_fetch_object($res);

//var_dump($resRow);
echo $resRow->id."<br>";
echo $resRow->fname."<br>";
echo $resRow->lname."<br>";
echo $resRow->gender."<br>";
echo $resRow->skill."<br>";
echo "<hr>";
?>