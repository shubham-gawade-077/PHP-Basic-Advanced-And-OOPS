<?php

// $arr=["shubham","sham","saideep"];
// array_push($arr,10,20,30,40);
// $arr[]=50;
// echo"<pre>";
// print_r($arr);
// echo"</pre>";

// $arr1=["name"=>"shubham","age"=>23];
// $arr1["city"]="pune";
// echo"<pre>";
// print_r($arr1);
// echo"</pre>";

// $arr1+=["state"=>"Maharashtra","country"=>"India"];
// echo"<pre>";
// print_r($arr1);
// echo"</pre>";

// array splice
// $arr=["shubham","sham","saideep"];
// //remove
// array_splice($arr,2,1);
// echo"<pre>";
// print_r($arr);
// echo"</pre>";
// //insert
// array_splice($arr,3,0,"sai");
// echo"<pre>";
// print_r($arr);
// echo"</pre>";
// //replace
// array_splice($arr,0,1,"Rohit");
// echo"<pre>";
// print_r($arr);
// echo"</pre>";

// diff function
$arr2=["shubham","sham","rohit"];
$arr3=["shubham","rohan","rohit"];
$arr4=array_diff($arr2,$arr3);
echo "<pre>";
print_r($arr4);
 echo"</pre>";




?>