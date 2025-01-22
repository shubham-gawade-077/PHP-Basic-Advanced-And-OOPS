<?php
    $names=["ram","sham","jay","sonu","monu",100,200,300,400,500];
    // echo count($names)."<br>";
        echo $names[0]."<br>";
        echo $names[1]."<br>";
        echo $names[2]."<br>";
        echo $names[3]."<br>";
        echo $names[4]."<br>";

        echo"<hr>";
        print_r($names);
        echo"<hr>";
        
    // for($i=0;$i<count($names);$i++)
    // {
    //     echo $names[$i]."<br>";
    // }

    // foreach($names as $n)
    // {
    //     echo $n."<br>";
    // }
    // foreach($names as $n):
    //     echo $n."<br>";
    //     endforeach
    // foreach($names as $n):
    
    //     if($n=="jay")
    //     {
    //         continue;
    //     }
    //     echo $n."<br>";
    // endforeach
    foreach($names as $n):
    
        if($n=="jay")
        {
            break;
        }
        echo $n."<br>";
    endforeach
?>