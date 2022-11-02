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
    
    $sql = "INSERT INTO employee(fname,lname,age,department) VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1,$fname,PDO::PARAM_STR);
    $stmt->bindParam(2,$lname,PDO::PARAM_STR);
    $stmt->bindParam(3,$age,PDO::PARAM_INT);
    $stmt->bindParam(4,$department,PDO::PARAM_STR);
    $stmt->execute();
    echo "DONE!";

}catch(PDOException $e){
    echo $e->getMessage();
}

?>