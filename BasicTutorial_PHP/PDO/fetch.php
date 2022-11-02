<?php 
$dns = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";
$conn = new PDO($dns,$username,$password);

$fname = "QSW2";
$lname = "SEW";
$age = 13;
$department = "PROGRAMMeR";

try{
    
    $sql = "SELECT * FROM employee";
    $res = $conn->query($sql);
    //$resArray = $res -> fetchAll(PDO::FETCH_BOTH);
    $resArray = $res -> fetchAll(PDO::FETCH_ASSOC);
    foreach($resArray as $val){
       // print_r($val);
        print_r("ID :\t".$val['id']."<br>");
        print_r("Name :\t".$val['fname']);
        print_r("\t".$val['lname']."<br>");
        print_r("Age :\t".$val['age']."<br>");
        print_r("Dept :\t".$val['department']."<br>");
        echo "<hr><br>";
    }
}catch(PDOException $e){
    echo $e->getMessage();
}

?>