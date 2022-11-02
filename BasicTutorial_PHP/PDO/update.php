<?php 
$dns = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";
$conn = new PDO($dns,$username,$password);

$id = 3;

try{
    
    $sql = "DELETE FROM employee WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1,$id);
    $stmt->execute();
}catch(PDOException $e){
    echo $e->getMessage();
}

?>