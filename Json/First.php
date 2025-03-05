<?php
// $a=["name"=>"shubham","age"=>23];
// $b=json_encode($a);
// echo $b;

$data='{"name":"shubham","age":23}';
// $d=json_decode($data);//object
$d=json_decode($data,true);//array
print_r($d);
?>