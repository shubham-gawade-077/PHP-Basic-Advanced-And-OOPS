<?php
    // function add($a,$b,$c,$d)
    // {
    //     return $a+$b+$c+$d;
    // }
    // $x=add(1,4,6,9);
    // echo $x;



    // function add(...$a)
    // {
    //     $add=0;
    //     foreach($a as $num)
    //     {
    //         $add+=$num;
    //     }
    //     return $add;
    // }
    // echo add(100,200,300,400,500);

// variable argument function:-(variadic function.)

    // function sum(...$a)
    // {
    //     $add=0;
    //    // $len=count($a);
    //     for($i=0;$i<count($a);$i++)
    //     {
    //         $add+=$a[$i];
    //     }
    //     return $add;
    // }
    // echo sum(100,200,300,400,500);



    function mul(...$a)
    {
        $mull=1;
        // foreach($a as $num)
        // {
        //     $mull=$mull*$num;
        // }
        for($i=0;$i<count($a);$i++)
        {
            $mull=$mull*$a[$i];
        }
        return $mull;

    }
    echo mul(1,2,3,4,5);

?>