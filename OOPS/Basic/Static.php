<?php
// class User 
// {
//     static function create()
//     {
//         echo"user created";
//     }
// }
// user::create();



class Demo 
{
    public static $id;
    public static $name;
    public static $email;
    public static $phone;
    public static function create($id,$name,$email,$phone)
    {
        echo self::$id=$id."<br>";
        echo self::$name=$name."<br>";
        echo self::$id=$id."<br>";
        echo self::$email=$email."<br>";
        echo self::$phone=$phone."<br>";
    }
}
Demo::create(1,"shubham","abc@gmail.com",12345678);
?>