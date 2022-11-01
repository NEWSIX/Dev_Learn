<?php
require("dbconnect.php"); 

$id = $_POST["id"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$skillArray = $_POST["skill"];

$skill = implode(",",$skillArray);

$sql = "    UPDATE employee 
            SET fname ='$fname',lname = '$lname',gender = '$gender',skill ='$skill'
            WHERE id = $id
        ";

$res = mysqli_query($conn,$sql);

if($res){
        header("location:index.php");
    }
else mysqli_error($conn);
?>