<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];

// if(isset($name))
// {
//     $x=setcookie("cookie_name",$name,time()+(1000));
//     if(isset($x))
//     {
//         echo"cookie create";
//     }
//     else{
//         echo"fail to create cookie";
//     }
// }
// else{
//     echo "name is not provided";
// }

if(isset($_POST['set']))
{
    setcookie("user",$name,time()+(10));
    echo "cookie set successfully <br>";
    //print_r($_COOKIE['user']);

}
else if(isset($_POST['display']))
{
    if(isset($_COOKIE['user']))
    {
        print_r($_COOKIE['user']);
    }
    else
    {
        echo "cookie not set";
    }
}
else if(isset($_POST['delete']))
{
    if(isset($_COOKIE['user']))
    {
        setcookie("user",null,-1);
        echo "cookie delete successful";
    }
    else
    {
        echo "No cookie found";
    }
}
else
{
    echo "cookie not set";
}
?>