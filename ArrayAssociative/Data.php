<?php
    $arr1=["name"=>"shubham","age"=>23,"village"=>"Gokhali","city"=>"Phaltan","pincode"=>415523,"Graduation"=>"Agriculture"];
    $arr2=["name"=>"Akash","age"=>23,"village"=>"Vidani","city"=>"Phaltan","pincode"=>415523,"Graduation"=>"Agriculture"];
   $arr3= ["name"=>"Ganesh","age"=>23,"village"=>"Sawal","city"=>"Baramati","pincode"=>413102,"Graduation"=>"Agriculture"];

    foreach($arr1 as $key=>$val)
    {
        echo "key :".$key." "."value :".$val."<br>";
    }
    echo"<hr>";
    foreach($arr2 as $key=>$val)
    {
        echo "key :".$key." "."value :".$val."<br>";
    }
    echo"<hr>";

    foreach($arr2 as $key=>$val)
    {
        echo "key :".$key." "."value :".$val."<br>";
    }
    echo"<hr>";

?>