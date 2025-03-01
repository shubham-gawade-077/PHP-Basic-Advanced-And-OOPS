<?php
class Destructor 
{
    function __destruct()
    {
        echo "destructor is called";
    }
}
$d=new Destructor();
?>