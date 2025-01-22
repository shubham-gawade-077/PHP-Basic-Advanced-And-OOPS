<?php
$arr=[10,20,30,40];
$newArr=array_slice($arr,2,5);
echo"<pre>";
print_r($newArr);
echo"<pre>";

$arr1=["name"=>"shubham","age"=>23];
unset($arr1["name"]);
echo"<pre>";
print_r($arr1);
echo"<pre>";

$arr2=[40,20,50,60,10,30,80,70];
sort($arr2);
echo"<pre>";
print_r($arr2);
echo"<pre>";

rsort($arr2);
echo"<pre>";
print_r($arr2);
echo"<pre>";

// associative array
$arr3=["name"=>"shubham","age"=>23];
asort($arr3);
echo"<pre>";
print_r($arr3);
echo"<pre>";

arsort($arr3);
echo"<pre>";
print_r($arr3);
echo"<pre>";

ksort($arr3);
echo"<pre>";
print_r($arr3);
echo"<pre>";

krsort($arr3);
echo"<pre>";
print_r($arr3);
echo"<pre>";

?>