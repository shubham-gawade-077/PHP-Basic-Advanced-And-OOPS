<?php
function sum($a,$b)
{
    return $a+$b;
}
$x=sum(5,2);
echo $x;


function hello()
{
    echo "Hello";
}
$x="hello";
echo $x();

function summ($a,$b)
{
    return $a+$b;
}
$add="summ";
echo $add(10,10);
?>