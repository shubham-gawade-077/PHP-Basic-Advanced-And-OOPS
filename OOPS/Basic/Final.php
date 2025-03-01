<?php
final class Demo 
{
    function get_name()
    {
        echo "xyz";
    }
}
// class Demo1 extends Demo
// {

// }
// $a=new Demo1();
// $a->get_name();

$a=new Demo();
$a->get_name();
?>

<?php
class Student 
{
    final function name()
    {
        echo "student<br>";
    }
}
class Teacher extends Student  
{
    function name()
    {
        echo"Teacher<br> ";
    }
}
$b=new Teacher();
$b->name();
?>