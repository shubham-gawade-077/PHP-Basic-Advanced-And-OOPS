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
    Enter height:
    <input type="number" name="height"><br>
    <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $r=$_POST['rds'];
        $h=$_POST['height'];
        $v=3.14*($r*$r)*$h;
        echo"Volume=$v";
    }
    ?>
</body>
</html>