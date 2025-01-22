<?php 
    $name="Shubham";
    echo $name;
    $a=10;
    $b= 20;
    echo "<br>";
    echo $a+$b;
    // variable is a container that store some values.
    // variable declaration: $variable_name = value;
    // comment :- comment is the non-executable part of the program.
    // Types
    // 1)single line comment :- # and //
       #first comment
    // 2)multiline comment :- /* */
    /*
        multiple line comment
    */
    // Data Types :- data types are used to represent types of values that variables can hold.
    // 1)Integer
    echo "<br>";
    $x=200;
    echo $x;
    echo "<br>";
    echo var_dump($x);
    // 2)Float
    echo "<br>";
    $y=225.20;
    echo $y;
    echo "<br>";
    echo var_dump($y);
    echo "<br>";
    // 3)String
    $s="3243545";
    echo $s;
    echo "<br>";
    echo var_dump($s);
    echo "<br>";
    // 4)Boolean
    $v=true;
    echo $v;
    echo "<br>";
    echo var_dump($v);
    echo "<br>";
    // 5)Array
    $arr=array("apple","banana","cherry");
    $newarr=["apple","banana","cherry","cheese"];
    print_r($newarr);

    print_r($arr);
    echo "<br>";
    $arr2=array(10,200,300,400);
    print_r($arr2);
    echo "<br>";
    // 6) null
    $d=null;
    echo $d;
    echo "<br>";
    echo var_dump($d);
    // 7) Object
    // 8) resource

   define("name","shubham");
   echo name;
//    define("name","sai");
   define("PI",3.14);
   echo PI;

?>