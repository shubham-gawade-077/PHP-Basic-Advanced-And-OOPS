<?php
class Fruits 
{
    public $fruit_name="Apple";
    function get_name()
    {
        echo $this->fruit_name."<br>";
    }
}
class Mango extends Fruits
{
    function a()
    {

        echo "Mango is king of fruits<br>";
    }
}
class Apple extends Mango 
{
    function b()
    {
        echo "Apple is temperate fruit<br>";
    }
}
$a=new Apple();
$a->get_name();
$a->a();
$a->b();
?>