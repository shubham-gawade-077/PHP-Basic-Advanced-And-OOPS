<?php
class Fruits 
{
    public $fruit_name;
    public $fruit_color;

    function __construct($fruit_name,$fruit_color)
    {
        $this->fruit_name=$fruit_name;
        $this->fruit_color=$fruit_color;
    }
    function get_name()
    {
        echo "fruit name is $this->fruit_name <br>";
        echo "fruit color is $this->fruit_color ";
    }
}
class Apple extends Fruits
{

}
$a=new Apple("Apple","Red");
$a->get_name();
?>