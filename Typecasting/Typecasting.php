<?php
// int to string
$x=100;
$y=(string)$x;
var_dump($y);
echo"<br>";
//***************************************** */

//string to int 
$str="200";
$strr=(int)$str;
var_dump($strr);
echo"<br>";

//********************************************** */

//int to float
$a=300;
$b=(float)$a;
var_dump($b);
echo"<br>";

//********************************************* */


//float to int
$c=400.00;
$d=(int)$c;
var_dump($d);
echo"<br>";

//*************************************************** */
 
//array to string
$arr=[100,200,300,400];
$ans=implode(",",$arr);
var_dump($ans);
echo"<br>";

$arr1=["ram","sham","om"];
$ans1=implode(",",$arr1);
echo$ans1;
echo"<br>";

//********************************************** */

// string to array 
$s="shubham,Rohit,Ganesh,Akash";
$s1=explode(",",$s);
print_r($s1);
?>