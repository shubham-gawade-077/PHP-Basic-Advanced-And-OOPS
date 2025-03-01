<?php
    trait TCS 
    {
        function get()
        {
            echo "5000<br>";
        }
    }
    trait Wipro 
    {
        function getEmp()
        {
            echo "10000<br>";
        }
    }
    class Demo 
    {
        use TCS;
        use Wipro;
    }
    $a=new Demo();
    $a->get();
    $a->getEmp();

?>