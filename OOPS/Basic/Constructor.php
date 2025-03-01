<?php
// class Demo
// {
//     function __construct()
//     {
//         echo "Hello"."<br>";
//         echo "this is constructor";
//     }
   

// }
// $demo=new Demo();

///////////////////////////////////////////////////

// class Demo 
// {
//     public function __construct($a,$b)
//     {
//         echo $a+$b;
//     }
// }
// $demo=new Demo(5,50);

/////////////////////////////////////////////////////////

// class Demo 
// {
//     public function __construct($name,$age,$city)
//     {
//         echo $name."<br>";
//         echo $age."<br>";
//         echo $city."<br>";
//     }
// }
// $demo=new Demo("Shubham",23,"Pune");

//////////////////////////////////////////////////

class Demo 
{
    function __construct($n1,$n2,$op)
    {
        if($op=="add")
        {
            echo "addition = ".$n1+$n2."<br>";
        }
       else if($op=="sub")
        {
            echo "substractuon = ".$n1-$n2."<br>";
        }
        else if($op=="mul")
        {
            echo "Multiplicaton = ".$n1*$n2."<br>";
        }
        else if($op=="div")
        {
            echo "Division = ".$n1/$n2."<br>";
        }
        else
        {
            echo "Invalid operation";
        }
    }
}
$d=new Demo(5,5,"mul");
?>