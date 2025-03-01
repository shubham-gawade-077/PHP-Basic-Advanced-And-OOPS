<?php
class Employee 
{
    public $id;
    public $name;
    public $city;
    public $salary;

    function __construct($id,$name,$city,$salary)
    {
        $this->id=$id;
        $this->name=$name;
        $this->city=$city;
        $this->salary=$salary;
    }

    function get_data()
    {
        echo $this->id."<br>";
        echo $this->name."<br>";
        echo $this->city."<br>";
        echo $this->salary."<br>";
    }
}
$e1=new Employee(1,"shubham","pune",10000);
$e1->get_data();

?>