<?php
 $n1=$_POST['num1'];
 $n2=$_POST['num2'];

 function add()
 {
    global $n1,$n2;

    echo $n1+$n2;
 }
 function sub()
 {
    global $n1,$n2;
    echo ($n1-$n2);
 }
 function mul()
 {
    global $n1,$n2;

    echo $n1*$n2;
 }
 function div()
 {
    global $n1,$n2;

    echo $n1/$n2;
 }

 if(isset($_POST['add']))
 {
    add();
 }
 else if(isset($_POST['sub']))
 {
    sub();
 }
 else if(isset($_POST['mul']))
 {
    mul();
 }
 else if(isset($_POST['div']))
 {
    div();
 }
 else
{
    echo "button not clicked....";
}
?>