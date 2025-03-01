<?php
echo "sham";
$name="shubham";
function sayHello()
{
$name="Hello";
echo $name;
global $name;
echo $name;
}
sayHello();
echo $name;

/////////////////////////////////////////////

// superglobals:- total 9
print_r($_SERVER);
print_r($GLOBALS);
// $_POST
// $_GET
// $_REQUEST
?>
