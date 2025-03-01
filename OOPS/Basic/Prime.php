<?php
class Prime 
{
   public $num;
   function __construct($num)
   {
    $this->num=$num;
   }
   function get()
   {
        $div=1;
        for($i=2;$i<$this->num;$i++)
        {
            if($this->num % $i==0)
            {
                $div++;
            }
        }
            if($div==1)
            {
                echo $this->num ." is prime number";
 
            }
            else
            {
                echo $this->num ." is not prime number";
            }
        
   }
}
$a=new prime(44);
$a->get();
?>