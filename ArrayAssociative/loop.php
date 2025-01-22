<?php
    $arr=["name"=>"shubham","age"=>23,"city"=>"pune"];

    echo"<table border='1' cellspacing='1'cellpadding='10'";
    echo"<tr><th>Name</th><th>Age</th><th>City</th></tr>";
    foreach($arr as $val)
    {
        echo "<td>$val</td>";
    }
    echo"</table>";
?>