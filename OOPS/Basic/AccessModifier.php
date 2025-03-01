<?php
// private-
class Student 
{
    public $name;
    private function get_name($name)
    {
        $this->name=$name;
        echo $this->name;
    }
    function name()
    {
        $this->get_name("Shubham");
    }
}
$s=new Student();
$s->name();

//////////////////////////////////////////////////////

//protected-
class Employee 
{
    public $name;
    protected function getName($name)
    {
        $this->name=$name;
        echo $this->name;
    }
}
class Emp extends Employee
{
    function name()
    {
        echo $this->getName("Ganesh");
    }
}
$a=new Emp();
echo "<br>";
$a->name();
?>