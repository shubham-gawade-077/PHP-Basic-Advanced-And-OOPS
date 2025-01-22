<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="leapyear.php" method="post">
    <label for="year">Enter the year</label>
    <input type="number" name="year"><br>
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$year=$_POST['year'];
if($year%4==0)
{
    echo"leap year";
}
else{
    echo"not leap year";
}
}
?>