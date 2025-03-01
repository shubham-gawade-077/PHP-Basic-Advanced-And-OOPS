<?php
abstract class First 
{
    abstract function makeEngine();
    abstract function sound();
}
class Demo extends First 
{
    public function makeEngine()
    {
        echo "car is started<br>";
    }

    public function sound()
    {
        echo "big";
    }
}
$a=new Demo();
$a->makeEngine();
$a->sound();
?>