<?php
class Demo 
{
    function getName()
    {
        echo "Shubham<br>";
        return $this;
    }
    function getCity()
    {
        echo "Pune<br>";
        return $this;

    }
    function getCourse()
    {
        echo "PHP<br>";
        return $this;

    }
    function getMail()
    {
        echo "Shubham@gmail.com<br>";
    }
}
$a=new Demo();
$a->getName()->getCity()->getCourse()->getMail();
?>