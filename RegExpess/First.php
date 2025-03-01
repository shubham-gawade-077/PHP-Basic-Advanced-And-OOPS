<?php
$str="Hello hii here";
$pattern="/h/i";
echo preg_match($pattern,$str);
echo preg_match_all($pattern,$str);
$p1="/e/";
echo preg_replace($p1,"k",$str);
?>