<?php
// session_start();
// $x=$_SESSION['name']="Shubham";
// echo $x;
// unset($_SESSION['name']);
// session_destroy();
// if(isset($_SESSION['name']))
// {
//     echo "session still exists";
// }
// else
// {
//     echo "session is destroy";
// }
session_start();
$username=$_POST['username'];
if(isset($_POST['set']))
{
    $_SESSION['username']=$username;
    echo "session set successfully";
}
else if(isset($_POST['show']))
{
    if(isset($_SESSION['username']))
    {
    echo $_SESSION['username'];
    }
    else
    {
        echo "Session is not set";
    }
}
else if(isset($_POST['delete']))
{
    if(isset($_SESSION['username']))
    {
    unset($_SESSION['username']);
    session_destroy();
    echo "session delete successfully";
    }
    else
    {
        echo "No session found";
    }
}
else
{
    echo "Invalid request";
}
?>