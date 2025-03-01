<?php 
function checkNum($num)
{
    if($num<1)
    {
        throw new exception("value is less than 1");
    }
    return true;
}
try
{
    checkNum(-10);
    echo "the value is grater than 1";
}
catch(exception $e)
{
    echo"message :".$e->getMessage();
}
?>