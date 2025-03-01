<?php
class MaxFrom2Num 
{
    public $n1;
    public $n2;
    function __construct($n1,$n2)
    {
        $this->n1=$n1;
        $this->n2=$n2;
        
    }
    function get_data()
    {
       if($this->n1 > $this->n2)
       {
        echo "$this->n1 is max </br>";
       }
       else if($this->n2 > $this->n1)
       {
        echo "$this->n2 is max <br>";
       }
       else
       {
        echo "Both are equal";
       }
    }
}
$a=new MaxFrom2Num(5,15);
$a->get_data();
?>