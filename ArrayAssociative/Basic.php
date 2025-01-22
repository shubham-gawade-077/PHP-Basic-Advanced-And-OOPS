<?php
$arr=["name"=>"shubham","age"=>23,"city"=>"pune"];
echo"<pre>";
print_r($arr);
echo"</pre>";

echo $arr["name"]."</br>";
echo $arr["age"]."<br>";
echo $arr["city"]."<br>";

foreach($arr as $key=>$val)
{
    echo("key ".$key." value ". $val)."</br>";
}
?>