<?php
class Student 
{
    public $rollNo;
    public $name;
    public $age;
    public $division;

    function set_data($rollNo,$name,$age,$division)
    {
        $this->rollNo=$rollNo;
        $this->name=$name;
        $this->age=$age;
        $this->division=$division;
    }
    function get_data()
    {
        echo $this->rollNo."<br>";
        echo $this->name."<br>";
        echo $this->age."<br>";
        echo $this->division."<br>";
    }
}
$s1=new Student();
$s1->set_data(1,"shubham",23,"A");
$s1->get_data();

?>