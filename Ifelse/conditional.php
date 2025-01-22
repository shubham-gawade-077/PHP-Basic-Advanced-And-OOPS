<?php
$age=$_POST['age'];
if($age>18)
{
    echo "you can vote";
}
else if($age<=0)
{
    echo "invalid age";
}
else{
    echo "cannt vote";
}
echo "<br>";
$ch=$_POST['ch'];
if ($ch >= 'a' && $ch <= 'z') {
    echo "Lowercase character";
}
else if ($ch >= 'A' && $ch <= 'Z') {
    echo "Uppercase character";
}
else if ($ch >= '0' && $ch <= '9') {
    echo "Number";
}
else {
    echo "Special character";
}






?>