<?php
include("./St.php");
include("./Te.php");
// $s=new St\Details();
// $t=new Te\Details();
// $s->student();
// echo"<br>";
// $t->teacher();

class Demo 
{
    function __construct()
    {
        $s=new St\Details();
        $t=new Te\Details();
        $s->student();
        echo"<br>";
        $t->teacher();
    }
}
$a=new Demo();
?>