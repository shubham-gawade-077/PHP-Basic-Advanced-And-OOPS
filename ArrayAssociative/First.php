<?php
    $arr=["name"=>"Rohit","age"=>30,"city"=>"pune"];
    echo $arr["name"]."<br>";
    echo $arr["age"]."<br>";
    echo $arr["city"]."<br>";
    echo"<hr>";
    print_r($arr);
    echo"<hr>";
    foreach($arr as $key=>$val)
    {
        echo "key = ".$key." value = ".$val."<br>";
    }
?>