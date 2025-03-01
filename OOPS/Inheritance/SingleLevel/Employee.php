<?php
class Employee 
{
    public $id;
    public $name;
    public $desig;

    function __construct($id,$name,$desig)
    {
        $this->id=$id;
        $this->name=$name;
        $this->desig=$desig;
    }
    function get_data()
    {
        echo $this->id."<br>";
        echo $this->name."<br>";
        echo $this->desig."<br>";
    }
}
class Company extends Employee
{

}
$a=new Company(1,"xyz","Developer");
$a->get_data();
?>