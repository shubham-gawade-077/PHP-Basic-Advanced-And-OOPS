<?php
class Student 
{
    function get()
    {
        echo "Student 1";
    }
}
class Student2 extends Student
{
    function get()
    {
        echo "Student 2";
    }
}
$s=new Student2();
$s->get();
?>