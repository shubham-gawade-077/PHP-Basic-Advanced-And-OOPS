<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Divisible.php" method="post">
    <label for="number">Enter the number</label>
    <input type="number" name="num"><br>
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$num=$_POST['num'];
if($num%5==0)
{
    if($num%7==0)
    {
    echo"Divisible by 5 and 7 ";
    }
    else{
        echo"divisible by 5 but not 7";
    }
}
else{
    if($num%7==0)
    {
    echo"Divisible by 7 but not 5 ";
    }
    else{
        echo"not divisible by 5 and 7";
    }
}
}
?>