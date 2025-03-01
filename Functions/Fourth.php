<?php
// no para with return

function add()
{
    $a=4;
    $b=5;
   // return "Hello";
   return $a+$b;
}
echo add()."<br>";
echo add()."<br>";

/* ******************************************************** */

// default para

function userName($name="Ram")
{
    echo $name;
}
userName("sham");
?>