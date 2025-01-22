<?php
$arr=["name"=>"Ram","class"=>12,"subject"=>"Science","marks"=>80,"city"=>"pune"];
echo"<table border='1'cellspacing='1'cellpadding='10'";
echo"<tr><th>name</th><th>class</th><th>subject</th><th>marks</th><th>city</th></tr>";
echo"<tr>";
foreach($arr as $val)
{
    echo"<td>$val</td>";
}
echo"</tr>";
echo"</table";
?>