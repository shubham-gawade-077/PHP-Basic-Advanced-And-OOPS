<?php
class Factorial 
{
    public $n;
    public $m=1;
    function __construct($n)
    {
       
        $this->n=$n;
        for($i=1;$i<=$n;$i++)
        {
        $this->m=$this->m*$i;
        }
    }
    function get_data()
    {
        echo $this->m;
    }
}
$a=new Factorial(5);
$a->get_data();
?>