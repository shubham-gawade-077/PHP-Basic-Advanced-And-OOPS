<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Enter 10th marks:
    <input type="number" name="10"><br>
    Enter 12th marks:
    <input type="number" name="12"><br>
    Enter degree marks:
    <input type="number" name="degree"><br>
    <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $a=$_POST['10'];
        $b=$_POST['12'];
        $c=$_POST['degree'];
       if($a>=60)
       {
        if($b>=60)
        {
            if($c>=60)
            {
                echo"eligible for apti";
            }
            else{
                echo"10th and 12th marks good but degree marks not good";
            }
        }
       else {
        echo"10th marks good but 12th marks not good";
        }
       }
       else{
        echo"not eligible for aptitude exam";
       }
    }
    ?>
</body>
</html>