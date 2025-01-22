<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Enter radius:
    <input type="number" name="rds"><br>
    <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $r=$_POST['rds'];
        $a=3.14*$r*$r;
        $circum=2*3.14*$r;
        echo"Area=$a<br>circum=$circum";
    }
    ?>
</body>
</html>