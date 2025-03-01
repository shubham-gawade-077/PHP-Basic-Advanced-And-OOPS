<?php
interface First 
{
    function make_engine();
    function sound();
}
class Demo implements First 
{
    function make_engine()
    {
        echo "car is started<br>";
    }
    function sound()
    {
        echo "good sound<br>";
    }
}
$a=new Demo();
$a->make_engine();
$a->sound();
?>