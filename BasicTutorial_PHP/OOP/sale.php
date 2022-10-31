<?php
require_once "employee.php";
class Sale extends Employee{
    private $area;
    function __construct($name,$salary,$area)
    {
        $this->exp = $area;
        parent::__construct($name,"Sale",$salary);

    }
    function description()
    {
        echo "Sale Naja <br>";
        
    }
    public function getBonus() : string {
		return "Bonus 49%";
	}
}
?>