<?php
require_once "employee.php";
require_once "office.php";
require_once "company.php";
class Programmer extends Employee implements Office ,Company{
    private $exp;

    function __construct($name,$salary,$exp)
    {
        $this->exp = $exp;
        parent::__construct($name,"Programmer",$salary);

    }
    function description()
    {
        echo "PRO <br>";
    }
    function getBonus() : string {
		return "Bonus 43%";
	}

    //
    function __call($name, $arguments)
    {
        if($name =="skill"){
            $c = count($arguments);
            switch($c){
                case 1: 
                    echo "Skill = ".$arguments[0];
                    break;
                case 2: 
                    echo "Skill = ".$arguments[0].",".$arguments[1];
                    break;
                case 3: 
                    echo "Skill = ".$arguments[0].",".$arguments[1].",".$arguments[2];
                    break;
                default:
                    echo "No Data <br>";
            }
        }
        
    }

    function __toString():string
    {
        return $this->name.$this->department.$this->salary;
        
    }
   
    public function officeName($name)
    {
        echo "Office :".$name;
    }
    public function setWorking($work): string
    {
        return "Work = ;".$work;
    }
    public function setCompanyName($name){
        echo "HRO";
    }
}
?>