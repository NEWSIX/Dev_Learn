<?php
require("dbconnect.php"); 

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$skillArray = $_POST["skill"];

$skill = implode(",",$skillArray);

$sql = "INSERT INTO employee(fname,lname,gender,skill) 
        Value('$fname','$lname','$gender','$skill')
        ";
$res = mysqli_query($conn,$sql);

if($res){
        header("location:index.php");
    }
?>