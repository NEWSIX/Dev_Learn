<?php

require("dbconnect.php");

$id= $_GET["idemp"];

$sql ="DELETE From employee Where id = $id";

$res = mysqli_query($conn,$sql);

if($res){
    header("location:index.php");
}

?>