<?php
class Animal 
{
    public $name;
    function set_name($name)
    {
        $this->name=$name;
    }
    function get_name()
    {
        return $this->name;
    }
}

class Dog extends Animal 
{

}
$d1=new Dog();
$d1->set_name("Tiger");
echo $d1->get_name();
?>