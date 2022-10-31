<?php

require_once"employee.php";

$emp1= new Employee("NEWSIX","PM",120000);
$emp2= new Employee("SAM","GM",200000);


showEmployee($emp1);
echo "<br><hr>";
showEmployee($emp2);


function showEmployee(Employee $obj){
    echo "Data : ".$obj->name." Position : ".$obj->department." Salary : ".$obj->salary;

}



// require_once "accounting.php";
// require_once "programmer.php";
// require_once "Sale.php";
// require_once "company.php";

//$company =new Company();
// echo Company::$companyName;
// Company::info();

// $emp1 = new Accounting("NEWSIX",120000); 
// $emp1 ->setSalary(20000);


// $emp1->getData();
// $emp1->description();
// echo $emp1->getBonus()."<hr>";
/*
$emp2 = new Programmer("Kim",90000,5); 

$emp2->getData();
//$emp2->description();
$emp2->officeName("WFH");
echo $emp2->officeName("Khonkean")."<hr>";

 $emp3 = new Programmer("Smith",32000 , "KhoneKean"); 
 $emp3->getData();
 //$emp3->description();
 $emp2->officeName("on-site");
 echo $emp2->officeName("Khonkean")."<hr>";
 */
/*
$emp1 = new Programmer("NEWSIX",50000);
echo $emp1;
echo "<hr>";

$emp2 = new Programmer("Dakim",60000);
$emp2 -> skill("C++","Python");
echo $emp1;
echo "<hr>";
*/
?>
