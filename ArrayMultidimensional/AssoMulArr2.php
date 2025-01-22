<?php
    $arr=[
        ["id"=>1,"name"=>"sonu","age"=>20],
        ["id"=>2,"name"=>"monu","age"=>25],
        ["id"=>3,"name"=>"raju","age"=>30],
    ];
    // echo$arr[0]["id"]."<br>";
    // echo$arr[0]["name"]."<br>";
    // echo$arr[0]["age"]."<br>";
    // echo$arr[1]["id"]."<br>";
    // echo$arr[1]["name"]."<br>";
    // echo$arr[1]["age"]."<br>";
    // echo$arr[2]["id"]."<br>";
    // echo$arr[2]["name"]."<br>";
    // echo$arr[2]["age"]."<br>";

    echo"<hr>";

    //foreach loop:

        foreach($arr as $ar)
        {
            foreach($ar as $key=>$val)
            {
                echo "key :     ".$key."\t"."value :".$val."<br>";
            }
        }
?>