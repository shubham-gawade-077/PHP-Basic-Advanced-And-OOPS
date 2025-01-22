<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="day">Select day:</label>
    <input type="radio" name="option" value="1">1
    <input type="radio" name="option" value="2">2
    <input type="radio" name="option" value="3">3
    <input type="radio" name="option" value="4">4
    <input type="radio" name="option" value="5">5
    <input type="radio" name="option" value="6">6
    <input type="radio" name="option" value="7">7 <br>
    <input type="submit" name="submit">
</form>

<?php
    if(isset($_POST['submit']))
    {
        $day=$_POST['option'];
        switch($day)
        {
            case 1:
                echo"sunday";
                break;
            case 2:
                echo"monday";
                break;
            case 3:
                echo"tuesday";
                break;
            case 4:
                echo"wednesday";
                break;
            case 5:
                echo"thirsday";
                break;
            case 6:
                echo"friday";
                break;
            case 7:
                echo"saturday";
                break;
                default:
                echo"Invalid day";
        }
    }
?>
</body>
</html>