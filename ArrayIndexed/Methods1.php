<?php
    $users=["ram","shaam","motu","patalu","doremon","rohit"];

    echo"Original Array:";
    echo"<pre>";
    print_r($users);
    echo"</pre>";

    echo"<hr>";
    // array_push
    array_push($users,"abc","xyz");
    echo"<pre>";
    print_r($users);
    echo"</pre>";
    echo"<hr>";

    //array_pop
    array_pop($users);
    echo"<pre>";
    print_r($users);
    echo"</pre>";
    echo"<hr>";

    //array_unshift
    array_unshift($users,"aaa","bbb");
    echo"<pre>";
    print_r($users);
    echo"</pre>";
    echo"<hr>";

    //array_shift
    array_shift($users);
    echo"<pre>";
    print_r($users);
    echo"</pre>";
    echo"<hr>";

    //count and sizeof

    echo count($users);
    echo"<br>";
    echo sizeof($users);
    echo"<hr>";

    // in_array   return 1 & 0

    if(in_array("ram",$users,true))
    {
        echo"present";
    }
    else
    {
        echo"abscent";
    }
    echo"<hr>";

    // array_search  return index
    echo array_search("motu",$users);
    echo"<hr>";

///////////////////////////////////////////////////////////////

    $arr=["shubham","pune","om","mumbai",5,8,"om"];

    // array_count_values 
    echo"<pre>";
    print_r(array_count_values($arr));
    echo"<pre>";
    echo"<hr>";

    // in_array
    echo in_array("5",$arr,true);
    echo"<hr>";

    $a=[1,2,3,4,5];
    $b=[6,7,8,9,10];
    $c=array_merge($a,$b);
    echo"<pre>";
    echo print_r($c);
    echo"</pre>";
    echo"<hr>";

?>