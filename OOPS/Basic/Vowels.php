<?php
class Vowels 
{
    public $v;
    function vowel($v)
    {
        $this->v=$v;
    }
    function check()
    {
        if($this->v=="A"||$this->v=="a"||$this->v=="E"||$this->v=="e"||$this->v=="I"||$this->v=="i"||$this->v=="O"||$this->v=="o"||$this->v=="U"||$this->v=="u")
      
        {
            echo $this->v." is vowel";
        }
        else
        {
            echo $this->v." is not vowel";
        } 
    }
}
$a=new Vowels();
$a->vowel("x");
$a->check();
?>