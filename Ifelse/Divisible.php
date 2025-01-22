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
if($num%7==0)
{
    echo"Divisible by 7 ";
}
else{
    echo"not Divisible by 7 ";
}
}
?>