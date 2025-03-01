<?php
class Student 
{
    public $id;
    public $name;
    public $email;
    function __construct($id,$name,$email)
    {
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
    }
    function get()
    {
        echo $this->id."<br>";
        echo $this->name."<br>";
        echo $this->email."<br>";
    }
}
class StudentCity extends Student
{
    public $city="pune";
    function get_city()
    {
        echo $this->city;
        echo "<br>";

    }
}
class StudentState extends Student
{
    public $state="MH";
    function get_state()
    {
        echo $this->state;
        echo "<br>";
    }
}
$a=new StudentState(1,"shubham","shubham@gmail.com");
$a->get();
$a->get_state();

$a=new StudentCity(2,"akash","akash@gmail.com");
$a->get();
$a->get_city();
?>