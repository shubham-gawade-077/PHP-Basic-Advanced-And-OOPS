<?php
class Vehicle 
{
    public $id;
    public $name;
    public $companyName;
    public $color;
    public $price;

    function __construct($id,$name,$companyName,$color,$price)
    {
        $this->id=$id;
        $this->name=$name;
        $this->companyName=$companyName;
        $this->color=$color;
        $this->price=$price;
    }
    function get_data()
    {
        echo $this->id."<br>";
        echo $this->name."<br>";
        echo $this->companyName."<br>";
        echo $this->color."<br>";
        echo $this->price."<br>";
    }
}
$a=new Vehicle(1,"MRF","MRF","black",2000);
$a->get_data();
?>