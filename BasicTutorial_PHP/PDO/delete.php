<?php 
$dns = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";
$conn = new PDO($dns,$username,$password);

$fname = "MNITI";
$lname = "NONNOUI";
$age = 22;
$department = "IT";

$id = 1;

try{

    $sql = "UPDATE employee SET fname=?,lname=?,age=?,department=? WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1,$fname);
    $stmt->bindParam(2,$lname);
    $stmt->bindParam(3,$age);
    $stmt->bindParam(4,$department);
    $stmt->execute();


    echo $stmt->rowCount() . " records UPDATED successfully";


} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}


  


?>