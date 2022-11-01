<?php

require("dbconnect.php");

$idArray= $_POST["id"];
$id = implode(",",$idArray);

 $sql ="DELETE From employee Where id in ($id)";

 $res = mysqli_query($conn,$sql);

 if($res){
    header("location:index.php");
}

?>