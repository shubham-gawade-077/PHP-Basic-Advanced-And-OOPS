<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter first number
        <input type="number"name="num1" ><br>
        Enter second number
        <input type="number" name="num2"><br>
        <label for="select">select operation</label><br>
        <input type="radio" name="operation" value="add">Addition
        <input type="radio" name="operation" value="sub">Substraction
        <input type="radio" name="operation" value="mul">multiplication
        <input type="radio" name="operation" value="div">division<br>
        <button type="submit" name="submit">submit</button>

       
    </form> 
<?php
if(isset($_POST['submit']))
{
 $operation=$_POST["operation"];
 $num1=$_POST["num1"];
 $num2=$_POST["num2"];
 switch($operation){
    case "add":
        echo $num1+$num2;
        break;
    case "sub":
        echo $num1-$num2;
        break;
    case "mul":
        echo $num1*$num2;
        break;
    case "div":
        echo $num1/$num2;
        break;
    default :
        echo "Invalid input";
 }
}
?>
</body>
</html>