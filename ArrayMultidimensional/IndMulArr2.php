<?php
    $arr=[
        [1,"shubham",23,"Phaltan"],
        [2,"Ganesh",23,"Baramati"],
        [3,"Ramesh",20,"Pune"],
    ];
    echo $arr[0][0];
    echo"<hr>";
    echo"<pre>";
    print_r($arr);
    echo"</pre>";
    echo"<hr>";

    //for loop:

    for($i=0;$i<count($arr);$i++)
    {
        for($j=0;$j<count($arr[$i]);$j++)
        {
            echo $arr[$i][$j]."<br>";
        }
    }
    echo"<hr>";

    // foreach loop 1:

    foreach($arr as $ar)
    {
        foreach($ar as $a)
        {
            echo $a."<br>";
        }
    }
    echo"<hr>";
    // foreach loop 2:

        foreach($arr as $ar):
            foreach($ar as $a):
                echo $a."<br>";
            endforeach;
        endforeach;
            echo"<hr>";
?>