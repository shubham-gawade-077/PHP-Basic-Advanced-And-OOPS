<?php
class Basic 
{
    public $name="Shubham";
    function sum($a,$b)
    {
        echo $a+$b."<br>";
        echo $this->name."<br>";
    }
}
$a=new Basic();
$a->sum(10,20);
$a->sum(5,5);
?>