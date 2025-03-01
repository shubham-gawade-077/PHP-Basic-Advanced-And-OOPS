<?php

    function my_callback($item)
    {
        return strlen($item);
    }

$str=["apple","mango","banana"];
$len=array_map("my_callback",$str);
print_r($len);
?>