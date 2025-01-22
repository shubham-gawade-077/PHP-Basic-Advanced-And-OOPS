<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        Enter the single digit 
        <input type="number"name="digit">
        <input type="submit"name="submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $n=$_POST['digit'];
        switch($n)
        {
            case 0:
                echo"it is zero";
                break;
            case 1:
                echo"it is one";
                break;
            case 2:
                echo"it is two";
                break;
            case 3:
                echo"it is three";
                break;
            case 4:
                echo"it is four";
                break;
            case 5:
                echo"it is five";
                break;
            case 6:
                echo"it is six";
                break;
            case 7:
                echo"it is seven";
                break;
            case 8:
                echo"it is eight";
                break;
            case 9:
                echo"it is nine";
                break;
                default:
                echo"Invalid choice...plz enter between 0 to 9 ";
        }
    }
    ?>
</body>
</html>