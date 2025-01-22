<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Enter age:
    <input type="number" name="age"><br>
    Enter weight:
    <input type="number" name="weight"><br>
    Enter hb:
    <input type="number" name="hb"><br>
    <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $age=$_POST['age'];
        $w=$_POST['weight'];
        $hb=$_POST['hb'];
       if($age>=18)
       {
        if($w>=50)
        {
            if($hb>=12)
            {
                echo"eligible for blood donation";
            }
            else{
                echo"age and weight is good but hb is less";
            }
        }
       else {
        echo"age is good but weight is less";
        }
       }
       else{
        echo"not eligible for blood donation";
       }
    }
    ?>
</body>
</html>