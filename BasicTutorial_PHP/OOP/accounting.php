<?php
require_once "employee.php";
class Accounting extends Employee{
    function __construct($name,$salary)
    {
        parent::__construct($name,"Accounting",$salary);

    }
    function description()
    {
        echo "Account Woyyy! <br>";
    }
    public function getBonus() : string {
		return "Bonus 42%";
	}
}
?>