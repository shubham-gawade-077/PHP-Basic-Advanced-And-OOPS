<?php
// example 1
echo"Example 1<br>";
    $fruits=["Apple","Banana","Mango","Pineapple","Guava","Sapota","Chocolate"];
    // for loop
    for($i=0;$i<count($fruits);$i++)
    {
        echo $fruits[$i]."<br>";
    }
    echo"<hr>";
    //foreach loop 1
    foreach($fruits as $f)
    {
        echo $f."<br>";
    }
    echo"<hr>";
    // foreach loop 2
    foreach($fruits as $f):
        echo $f."<br>";
    endforeach;
    echo"<hr>";

//////////////////////////////////////////////////////////////////

// example 2
echo"Example 2<br>";
    $arr=array("ram","sham","seeta",100,200,300);
    //for loop
    echo"<table border='1'cellspacing='1'cellpadding='10'>";
    echo"<tr>";
    for($a=0;$a<count($arr);$a++)
    {
        echo "<th>$a</th>";
    }
    echo"</tr>";
    echo"<tr>";
    for($i=0;$i<count($arr);$i++)
    {
        echo "<td>".$arr[$i]."</td>";
    }
    echo"</tr>";
    echo"</table>";
    echo "<hr>";
    //foreach loop 1
    foreach($arr as $a)
    {
        echo $a."<br>";
    }
    echo"<hr>";
    //foreach loop 2
    foreach($arr as $b):
        echo $b."<br>";
    endforeach;
    echo"<hr>";
?>