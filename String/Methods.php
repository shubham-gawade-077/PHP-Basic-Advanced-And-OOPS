<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$name=" Shubham ";
echo$name."<br>";
echo strlen($name)."<br>";
echo strtoupper($name)."<br>";
echo strtolower($name)."<br>";
echo trim($name)."<br>";
echo ltrim($name)."<br>";
echo rtrim($name)."<br>";
$str="shubham gawade";
echo ucfirst($str)."<br>";
echo ucwords($str)."<br>";
$str2="india is my country";
$str3="my name is shubham gawade";
echo str_word_count($str2)."<br>";
echo str_word_count($str3)."<br>";
echo strpos("my name is","is")."<br>";
$s="ram";
echo strpos($s,"m")."<br>";
$x="hello world";
echo str_replace("world","jay",$x)."<br>";
echo strrev($x)."<br>";
print_r(explode(" ",$x))."<br>";
echo "<br>";
$a="hello php";
echo substr($a,0,5)."<br>";
?>
</body>
</html>