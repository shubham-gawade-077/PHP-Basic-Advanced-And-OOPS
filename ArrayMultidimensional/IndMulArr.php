<?php
// $arr=[["om","raj",30,40],
//     ["sai","soham",10,20],
//     ["ram","sham",50,60]];
    
    $arr=array(
        array("om","raj",30,40),
        array("sai","soham",10,20),
        array("ram","sham",50,60),

    );
    echo $arr[0][0]."<br>";
    echo $arr[0][1]."<br>";
    echo $arr[0][2]."<br>";
    echo $arr[0][3]."<br>";
    echo $arr[1][0]."<br>";
    echo $arr[1][1]."<br>";
    echo $arr[1][2]."<br>";
    echo $arr[1][3]."<br>";
    echo $arr[2][0]."<br>";
    echo $arr[2][1]."<br>";
    echo $arr[2][2]."<br>";
    echo $arr[2][3]."<br>";
    echo"<hr>";
    echo"<pre>";
    print_r($arr);
    echo"</pre>";
    echo"<hr>";
    foreach($arr as $ar)
    {
       foreach($ar as $a)
       {
        echo$a."<br>";
       }
    }
?>