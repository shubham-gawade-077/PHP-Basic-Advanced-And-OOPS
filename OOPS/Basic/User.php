<?php
class User 
{
    public $id;
    public $name;
    public $email;
    public $password;

    function set_data($a,$b,$c,$d)
    {
        $this->id=$a;
        $this->name=$b;
        $this->email=$c;
        $this->password=$d;
    }

    function get_data()
    {
        echo $this->id."<br>";
        echo $this->name."<br>";
        echo $this->email."<br>";
        echo $this->password."<br>";
    }
}
$u1=new User();
$u1->set_data(1,"shubham","shubhamgawade@gmail.com",123);
$u1->get_data();
$u2=new User();
$u2->set_data(2,"Akash","akash@gmail.com",125553);
$u2->get_data();
?>