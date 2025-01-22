<?php
    $arr=[["name"=>"shubham","age"=>23,"village"=>"Gokhali","city"=>"Phaltan","pincode"=>415523,"Graduation"=>"Agriculture"],
   ["name"=>"Akash","age"=>23,"village"=>"Vidani","city"=>"Phaltan","pincode"=>415523,"Graduation"=>"Agriculture"],
   ["name"=>"Ganesh","age"=>23,"village"=>"Sawal","city"=>"Baramati","pincode"=>413102,"Graduation"=>"Agriculture"]];
    echo$arr[0]["name"]."<br>";
    echo$arr[0]["age"]."<br>";
    echo$arr[0]["village"]."<br>";
    echo$arr[0]["city"]."<br>";
    echo$arr[0]["pincode"]."<br>";
    echo$arr[0]["Graduation"]."<br>";
    echo$arr[1]["name"]."<br>";
    echo$arr[1]["age"]."<br>";
    echo$arr[1]["village"]."<br>";
    echo$arr[1]["city"]."<br>";
    echo$arr[1]["pincode"]."<br>";
    echo$arr[1]["Graduation"]."<br>";
    echo$arr[2]["name"]."<br>";
    echo$arr[1]["age"]."<br>";
    echo$arr[1]["village"]."<br>";
    echo$arr[1]["city"]."<br>";
    echo$arr[1]["pincode"]."<br>";
    echo$arr[1]["Graduation"]."<br>";
    
    echo"<hr>";
    echo"<pre>";
    print_r($arr);
    echo"</pre>";
    echo"<hr>";
    foreach($arr as $ar)
    {
        foreach($ar as $a)
        {
            echo $a."<br>";
        }
    }
?>