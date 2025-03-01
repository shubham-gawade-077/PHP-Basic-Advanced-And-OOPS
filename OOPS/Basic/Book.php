<?php
class Book 
{
    public $id;
    public $name;
    public $auther;
    public $price;

    function __construct($id,$name,$auther,$price)
    {
        $this->id=$id;
        $this->name=$name;
        $this->auther=$auther;
        $this->price=$price;
    }
    function get_data()
    {
        echo $this->id."<br>";
        echo $this->name."<br>";
        echo $this->auther."<br>";
        echo $this->price."<br>";
    }
}
$a=new Book(1,"Shamachi aai","sane guruji",100);
$a->get_data();
?>