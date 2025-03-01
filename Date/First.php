<?php
// date-
echo date("d")."<br>";
echo date("D")."<br>";
echo date("m")."<br>";
echo date("M")."<br>";
echo date("y")."<br>";
echo date("Y")."<br>";
echo date("D - M - Y")."<br>";
echo date("d / m / y")."<br>";

/////////////////////////////////

//time-
echo date_default_timezone_get()."<br>";
echo date_default_timezone_set("Asia/Kolkata")."<br>";
echo date_default_timezone_get()."<br>";

echo date("h")."<br>";
echo date("H")."<br>";
echo date("i")."<br>";
echo date("s")."<br>";
echo date("sa")."<br>";
echo date("h:is")."<br>";
echo date("h - i - sa")."<br>";

////////////////////////////////////

//date set-
$date= new DateTime("2025-12-01");
echo $date->format("y-m-d");
?>