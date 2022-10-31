<?php
//require_once "company.php";
class Employee {

    public $name;
    public $department;
    public $salary;

    function __construct($name,$dept,$salary)
    {   

        // $this->companyName = "NEWSIX Divine /";
        // echo $this->companyName."<br>";
        $this->name = $name;
        $this->department = $dept;
        $this->salary = $salary;
    }
    // function __destruct()
    // {  
    //     echo "Name :\t$this->name<br>";
    //     echo "Department :\t$this->department<br>";
    //     echo "Salary :\t$this->salary<br>";
    //     echo "<hr>";
        
    // }
    
    public function setEmpName($name){
        $this->name = $name;
    }
    public function setEmpDept($dept){
        $this->department = $dept;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
    
    public function getData(){

        echo "Name :\t$this->name<br>";
        echo "Department :\t$this->department<br>";
        echo "Salary :\t$this->salary<br>";
        
    }
   // abstract public function description();
   // abstract public function getBonus():string;
   
}

?>